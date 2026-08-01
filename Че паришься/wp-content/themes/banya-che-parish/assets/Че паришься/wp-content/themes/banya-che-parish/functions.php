<?php
// functions.php - Ядро темы "Че паришься?"

function banya_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    // Регистрация меню
    register_nav_menus(array(
        'header-menu' => __('Меню в шапке', 'banya'),
        'footer-menu' => __('Меню в футере', 'banya'),
    ));
}
add_action('after_setup_theme', 'banya_setup');

// Подключение стилей и скриптов
function banya_assets() {
    // Шрифты Unbounded + Manrope
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Unbounded:wght@400;500;700&display=swap', [], null);
    
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    // Наши стили
    wp_enqueue_style('banya-style', get_stylesheet_uri(), ['google-fonts', 'swiper-css'], '1.0.0');
    
    // Скрипты
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('banya-scripts', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'swiper-js'], '1.0.0', true);

    // Передача AJAX URL и Nonce в JS
    wp_localize_script('banya-scripts', 'banya_ajax', [
        'url'   => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('banya_booking_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'banya_assets');

// Создание страницы настроек ACF Options
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Настройки сайта',
        'menu_title' => 'Настройки сайта',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}

// Обработчик формы бронирования -> Telegram
add_action('wp_ajax_banya_send_booking', 'banya_handle_booking');
add_action('wp_ajax_nopriv_banya_send_booking', 'banya_handle_booking');

function banya_handle_booking() {
    check_ajax_referer('banya_booking_nonce', 'nonce');

    $name    = sanitize_text_field($_POST['name']);
    $phone   = sanitize_text_field($_POST['phone']);
    $date    = sanitize_text_field($_POST['date']);
    $time    = sanitize_text_field($_POST['time']);
    $guests  = intval($_POST['guests']);
    $comment = sanitize_textarea_field($_POST['comment']);
    
    // Сбор чекбоксов
    $services = isset($_POST['services']) ? implode(', ', $_POST['services']) : 'Нет';
    $food     = isset($_POST['food']) ? implode(', ', $_POST['food']) : 'Нет';

    // Данные бота из ACF Options (или хардкод, если не заполнено)
    $bot_token = get_field('tg_bot_token', 'option') ?: 'ВАШ_ТОКЕН_БОТА'; 
    $chat_id   = get_field('tg_chat_id', 'option') ?: 'ВАШ_CHAT_ID';

    $message = "🔥 *НОВАЯ БРОНЬ: ЧЕ ПАРИШЬСЯ?*\n\n";
    $message .= "👤 *Имя:* {$name}\n";
    $message .= " *Телефон:* {$phone}\n";
    $message .= "📅 *Дата:* {$date}\n";
    $message .= " *Время:* {$time}\n";
    $message .= "👥 *Гостей:* {$guests}\n";
    $message .= "💬 *Комментарий:* {$comment}\n\n";
    $message .= "🌿 *Услуги:* {$services}\n";
    $message .= "🍖 *Еда:* {$food}\n";

    $response = wp_remote_post("https://api.telegram.org/bot{$bot_token}/sendMessage", [
        'body' => [
            'chat_id'    => $chat_id,
            'text'       => $message,
            'parse_mode' => 'Markdown'
        ]
    ]);

    if (is_wp_error($response)) {
        wp_send_json_error(['message' => 'Ошибка отправки. Попробуйте позже.']);
    } else {
        wp_send_json_success(['message' => 'Заявка успешно отправлена! Мы свяжемся с вами.']);
    }
}