document.addEventListener('DOMContentLoaded', () => {
    // Мобильное меню
    const burger = document.getElementById('burgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMenu = document.getElementById('closeMobileMenu');

    if(burger && mobileMenu) {
        burger.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // Swiper Галерея
    if(document.querySelector('.gallery-swiper')) {
        new Swiper('.gallery-swiper', {
            slidesPerView: 1, spaceBetween: 20, loop: true,
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    }

    // Swiper Отзывы
    if(document.querySelector('.reviews-swiper')) {
        new Swiper('.reviews-swiper', {
            slidesPerView: 1, spaceBetween: 20, loop: true,
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: { 768: { slidesPerView: 2 } }
        });
    }

    // FAQ Аккордеон
    document.querySelectorAll('.faq-q').forEach(q => {
        q.addEventListener('click', () => q.parentElement.classList.toggle('active'));
    });

    // Маска телефона
    const phoneInput = document.querySelector('.phone-mask');
    if(phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
            e.target.value = !x[2] ? x[1] : '+' + x[1] + ' (' + x[2] + (x[3] ? ') ' + x[3] : '') + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
        });
    }

    // Отправка формы в Telegram
    const form = document.getElementById('bookingForm');
    if(form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerText = 'Отправка...';
            btn.disabled = true;

            const formData = new FormData(form);
            formData.append('action', 'banya_send_booking');
            formData.append('nonce', banya_ajax.nonce);

            try {
                const res = await fetch(banya_ajax.url, { method: 'POST', body: formData });
                const data = await res.json();
                if(data.success) {
                    document.getElementById('formSuccess').style.display = 'block';
                    form.reset();
                } else {
                    alert('Ошибка: ' + (data.data?.message || 'Попробуйте позже'));
                }
            } catch(err) { console.error(err); alert('Ошибка соединения'); }
            finally {
                btn.innerText = originalText;
                btn.disabled = false;
            }
        });
    }
});