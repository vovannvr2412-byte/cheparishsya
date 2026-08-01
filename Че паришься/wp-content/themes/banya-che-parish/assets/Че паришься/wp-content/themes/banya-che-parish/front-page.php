<?php get_header(); ?>

<main class="main">
    <!-- 1. Hero -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/exterior-adres.jpg');">
        <div class="container">
            <h1 class="hero__title"><?php the_field('hero_title', 'option') ?: 'Русская баня на дровах<br>для настоящего отдыха'; ?></h1>
            <p class="hero__subtitle"><?php the_field('hero_subtitle', 'option') ?: 'Отдохните компанией, попарьтесь с дубовыми вениками, окунитесь в теплый бассейн и насладитесь блюдами, приготовленными на углях.'; ?></p>
            <div class="hero__btns">
                <a href="#booking" class="btn btn--gold">Забронировать</a>
                <a href="tel:+79521041144" class="btn btn--outline">Позвонить</a>
            </div>
        </div>
    </section>

    <!-- 2. Почему выбирают нас -->
    <section class="section section--beige" id="about">
        <div class="container">
            <h2 class="section__title">Почему выбирают нас</h2>
            <div class="features-grid">
                <div class="feature-card"><div class="feature-icon">🔥</div><h3>Настоящая русская парная</h3><p>Дровяная баня с мягким и насыщенным паром.</p></div>
                <div class="feature-card"><div class="feature-icon"></div><h3>Бассейн с подогревом</h3><p>Температура воды подготавливается индивидуально.</p></div>
                <div class="feature-card"><div class="feature-icon">🤫</div><h3>Полное уединение</h3><p>Только ваша компания. Никаких посторонних.</p></div>
                <div class="feature-card"><div class="feature-icon">🛋️</div><h3>Уютная атмосфера</h3><p>Современный интерьер и комфортная зона отдыха.</p></div>
                <div class="feature-card"><div class="feature-icon">🕰️</div><h3>Круглосуточно</h3><p>Принимаем гостей в любое время суток.</p></div>
                <div class="feature-card"><div class="feature-icon"></div><h3>Все для отдыха</h3><p>Музыка, ТВ, мангал и еда собственного приготовления.</p></div>
            </div>
        </div>
    </section>

    <!-- 3. Стоимость -->
    <section class="section section--dark" id="price">
        <div class="container">
            <h2 class="section__title section__title--gold">Стоимость аренды</h2>
            <div class="price-grid">
                <div class="price-card"><h3>Пн–Чт</h3><div class="price-value">2000 ₽<span>/час</span></div><p class="price-note">до 6 человек</p></div>
                <div class="price-card"><h3>Пятница</h3><div class="price-value">2000 ₽<span>/час</span></div><p class="price-note">до 6 человек</p></div>
                <div class="price-card price-card--accent"><h3>Суббота</h3><div class="price-value">2500 ₽<span>/час</span></div><p class="price-note">до 6 человек</p></div>
                <div class="price-card"><h3>Воскресенье</h3><div class="price-value">2000 ₽<span>/час</span></div><p class="price-note">до 6 человек</p></div>
            </div>
            <p class="price-warning">️ Каждый доп. гость +150 ₽/час. Мин. аренда: Пн-Чт от 3ч, Пт-Вс от 4ч.</p>
            <div class="center"><a href="#booking" class="btn btn--gold">Забронировать дату</a></div>
        </div>
    </section>

    <!-- 4. Доп. услуги -->
    <section class="section section--wood">
        <div class="container">
            <h2 class="section__title">Дополнительные услуги</h2>
            <div class="services-grid">
                <div class="service-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/veniki-dub.jpg" alt="Веники">
                    <div class="card-body"><h3>Дубовые веники</h3><p>2 шт. (запарены к приходу)</p><span class="card-price">1300 ₽</span></div>
                </div>
                <div class="service-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parnaya-kamin.jpg" alt="Пар-мастер">
                    <div class="card-body"><h3>Пар-мастер</h3><p>Профессиональный пар</p><span class="card-price">1000 ₽ / час</span></div>
                </div>
                <div class="service-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bassein.jpg" alt="Бассейн">
                    <div class="card-body"><h3>Бассейн</h3><p>Индивидуальная t° воды</p><span class="card-price">Включено</span></div>
                </div>
                <div class="service-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mangal-zone.jpg" alt="Мангал">
                    <div class="card-body"><h3>Мангальная зона</h3><p>Угли и мангал</p><span class="card-price">Включено</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Меню -->
    <section class="section section--beige" id="menu">
        <div class="container">
            <h2 class="section__title">Меню с мангала</h2>
            <div class="menu-grid">
                <div class="menu-card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/griby.jpg" alt="Грибы"><div class="card-body"><h3>Грибы на мангале</h3><p>1 кг</p><span class="card-price">650 ₽</span></div></div>
                <div class="menu-card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kartofel.jpg" alt="Картофель"><div class="card-body"><h3>Картофель с беконом</h3><p>1 кг</p><span class="card-price">700 ₽</span></div></div>
                <div class="menu-card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shashlyk.jpg" alt="Шашлык"><div class="card-body"><h3>Шашлык</h3><p>1 кг</p><span class="card-price">1200 ₽</span></div></div>
            </div>
        </div>
    </section>

    <!-- 6. Как проходит отдых -->
    <section class="section section--green">
        <div class="container">
            <h2 class="section__title">Как проходит отдых</h2>
            <div class="steps" style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px; text-align:center;">
                <div class="step"><span style="font-size:40px; color:var(--color-gold); display:block; margin-bottom:10px;">1</span><p>Выбираете дату</p></div>
                <div class="step"><span style="font-size:40px; color:var(--color-gold); display:block; margin-bottom:10px;">2</span><p>Оставляете заявку</p></div>
                <div class="step"><span style="font-size:40px; color:var(--color-gold); display:block; margin-bottom:10px;">3</span><p>Менеджер связывается</p></div>
                <div class="step"><span style="font-size:40px; color:var(--color-gold); display:block; margin-bottom:10px;">4</span><p>Подтверждает бронь</p></div>
                <div class="step"><span style="font-size:40px; color:var(--color-gold); display:block; margin-bottom:10px;">5</span><p>Приезжаете отдыхать</p></div>
            </div>
        </div>
    </section>

    <!-- 7. Галерея -->
    <section class="section section--dark" id="gallery">
        <div class="container">
            <h2 class="section__title section__title--gold">Галерея</h2>
            <div class="swiper gallery-swiper">
                <div class="swiper-wrapper">
                    <?php 
                    $images = ['parnaya-verh.jpg', 'bassein-stena.jpg', 'komnata-otdyha.jpg', 'mangal-zone.jpg', 'svetilniki.jpg'];
                    foreach($images as $img): ?>
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $img; ?>" loading="lazy"></div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- 8. Отзывы -->
    <section class="section section--beige" id="reviews">
        <div class="container">
            <h2 class="section__title">Отзывы гостей</h2>
            <div class="swiper reviews-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide review-card"><p>"Лучшая баня в городе! Пар легкий, бассейн чистый."</p><div class="review-author">Александр, VK</div></div>
                    <div class="swiper-slide review-card"><p>"Отмечали ДР, всё супер. Шашлык просто огонь!"</p><div class="review-author">Мария, Telegram</div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ -->
    <section class="section section--wood">
        <div class="container">
            <h2 class="section__title">Частые вопросы</h2>
            <div class="faq">
                <div class="faq-item"><div class="faq-q">Во сколько можно приехать? <span>+</span></div><div class="faq-a">Работаем круглосуточно. Время брони с 9:00 до 22:00.</div></div>
                <div class="faq-item"><div class="faq-q">Можно ли со своей едой? <span>+</span></div><div class="faq-a">Да, вы можете привезти свои продукты и напитки.</div></div>
                <div class="faq-item"><div class="faq-q">Есть ли парковка? <span>+</span></div><div class="faq-a">Да, на территории есть бесплатная парковка.</div></div>
                <div class="faq-item"><div class="faq-q">Как отменить бронь? <span>+</span></div><div class="faq-a">Предоплата возвращается при отмене за 7 дней до даты.</div></div>
            </div>
        </div>
    </section>

    <!-- 10. Контакты -->
    <section class="section section--dark" id="contacts">
        <div class="container">
            <h2 class="section__title section__title--gold">Контакты</h2>
            <div class="contacts-grid">
                <div class="contact-info">
                    <p style="margin-bottom:16px;"><strong>Адрес:</strong> Дружеский переулок, 12</p>
                    <p style="margin-bottom:16px;"><strong>Телефон:</strong> <a href="tel:+79521041144" style="color:var(--color-gold)">+7 (952) 104-11-44</a></p>
                    <div style="display:flex; gap:12px; margin-top:24px;">
                        <a href="https://vk.ru/cheparis" target="_blank" class="btn btn--outline">VKontakte</a>
                        <a href="https://t.me/cheparishsya" target="_blank" class="btn btn--outline">Telegram</a>
                    </div>
                </div>
                <div class="contact-map">
                    <iframe src="https://yandex.ru/map-widget/v1/?text=Дружеский%20переулок%2012" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Форма бронирования -->
    <section class="section section--green" id="booking">
        <div class="container">
            <h2 class="section__title">Забронируйте отдых</h2>
            <p class="section__subtitle" style="text-align:center; margin-bottom:40px; opacity:0.8;">Оставьте заявку, и менеджер свяжется с вами.</p>
            
            <form class="booking-form" id="bookingForm">
                <div class="form-grid">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__" class="phone-mask" required>
                    <input type="date" name="date" required>
                    <input type="time" name="time" required>
                    <input type="number" name="guests" placeholder="Кол-во гостей" min="1" required>
                </div>
                
                <div class="form-checks">
                    <h4 style="width:100%; margin-bottom:8px;">Услуги:</h4>
                    <label><input type="checkbox" name="services[]" value="Пар-мастер"> Пар-мастер</label>
                    <label><input type="checkbox" name="services[]" value="Дубовые веники"> Дубовые веники</label>
                </div>
                
                <div class="form-checks">
                    <h4 style="width:100%; margin-bottom:8px;">Еда:</h4>
                    <label><input type="checkbox" name="food[]" value="Шашлык"> Шашлык</label>
                    <label><input type="checkbox" name="food[]" value="Грибы"> Грибы</label>
                    <label><input type="checkbox" name="food[]" value="Картофель"> Картофель</label>
                </div>

                <textarea name="comment" rows="3" placeholder="Комментарий"></textarea>
                
                <button type="submit" class="btn btn--gold btn--full" style="margin-top:24px;">Забронировать</button>
                <div class="form-success" id="formSuccess">Заявка отправлена!</div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>