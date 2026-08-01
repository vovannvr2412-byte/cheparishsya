<footer class="footer" id="siteFooter">
    <div class="container">
        <div class="footer__grid">
            <!-- Колонка 1: Лого и описание -->
            <div class="footer__col footer__col--brand">
                <div class="footer__logo">ЧЕ ПАРИШЬСЯ?</div>
                <p class="footer__desc">Русская баня на дровах для настоящего отдыха.<br>Атмосфера тепла, комфорта и уединения.</p>
            </div>

            <!-- Колонка 2: Навигация -->
            <div class="footer__col">
                <h4>Навигация</h4>
                <a href="#about">О бане</a>
                <a href="#price">Стоимость</a>
                <a href="#menu">Меню</a>
                <a href="#gallery">Галерея</a>
                <a href="#reviews">Отзывы</a>
                <a href="#contacts">Контакты</a>
            </div>

            <!-- Колонка 3: Контакты -->
            <div class="footer__col">
                <h4>Контакты</h4>
                <a href="tel:<?php echo get_field('phone', 'option') ?: '+79521041144'; ?>">
                    <?php echo get_field('phone', 'option') ?: '+7 (952) 104-11-44'; ?>
                </a>
                <p class="footer__address"><?php echo get_field('address', 'option') ?: 'Дружеский переулок, 12'; ?></p>
                
                <div class="footer__socials">
                    <?php if(get_field('vk_link', 'option')): ?>
                        <a href="<?php the_field('vk_link', 'option'); ?>" target="_blank">VKontakte</a>
                    <?php endif; ?>
                    <?php if(get_field('tg_link', 'option')): ?>
                        <a href="<?php the_field('tg_link', 'option'); ?>" target="_blank">Telegram</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <p>&copy; <?php echo date('Y'); ?> Че Паришься? Все права защищены.</p>
            <a href="/privacy-policy">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>