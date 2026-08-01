<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="siteHeader">
    <div class="container header__inner">
        <!-- Логотип -->
        <a href="/" class="header__logo">
            <?php if(has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="logo-text">ЧЕ ПАРИШЬСЯ?</span>
            <?php endif; ?>
        </a>

        <!-- Десктопное меню -->
        <nav class="header__nav desktop-nav">
            <a href="#about">О бане</a>
            <a href="#price">Стоимость</a>
            <a href="#menu">Меню</a>
            <a href="#gallery">Галерея</a>
            <a href="#reviews">Отзывы</a>
            <a href="#contacts">Контакты</a>
        </nav>

        <!-- Правая часть: Телефон, Соцсети, Кнопка -->
        <div class="header__actions">
            <a href="tel:<?php echo get_field('phone', 'option') ?: '+79521041144'; ?>" class="header__phone">
                <?php echo get_field('phone', 'option') ?: '+7 (952) 104-11-44'; ?>
            </a>
            
            <div class="header__socials">
                <?php if(get_field('vk_link', 'option')): ?>
                    <a href="<?php the_field('vk_link', 'option'); ?>" target="_blank" aria-label="VKontakte">VK</a>
                <?php endif; ?>
                <?php if(get_field('tg_link', 'option')): ?>
                    <a href="<?php the_field('tg_link', 'option'); ?>" target="_blank" aria-label="Telegram">TG</a>
                <?php endif; ?>
            </div>

            <a href="#booking" class="btn btn--gold">Забронировать</a>
        </div>

        <!-- Бургер для мобильных -->
        <button class="burger" id="burgerBtn" aria-label="Открыть меню">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- МОБИЛЬНОЕ МЕНЮ (Строго по ТЗ: Fullscreen, no-scroll, cross icon) -->
<div class="mobile-menu" id="mobileMenu">
    <button class="mobile-menu__close" id="closeMobileMenu" aria-label="Закрыть меню">✕</button>
    
    <nav class="mobile-menu__nav">
        <a href="#about" class="mobile-link">О бане</a>
        <a href="#price" class="mobile-link">Стоимость</a>
        <a href="#menu" class="mobile-link">Меню</a>
        <a href="#gallery" class="mobile-link">Галерея</a>
        <a href="#reviews" class="mobile-link">Отзывы</a>
        <a href="#contacts" class="mobile-link">Контакты</a>
    </nav>

    <div class="mobile-menu__footer">
        <a href="tel:<?php echo get_field('phone', 'option') ?: '+79521041144'; ?>" class="btn btn--gold btn--full">
            <?php echo get_field('phone', 'option') ?: '+7 (952) 104-11-44'; ?>
        </a>
        <div class="mobile-menu__socials">
            <?php if(get_field('vk_link', 'option')): ?>
                <a href="<?php the_field('vk_link', 'option'); ?>" target="_blank">VKontakte</a>
            <?php endif; ?>
            <?php if(get_field('tg_link', 'option')): ?>
                <a href="<?php the_field('tg_link', 'option'); ?>" target="_blank">Telegram</a>
            <?php endif; ?>
        </div>
    </div>
</div>