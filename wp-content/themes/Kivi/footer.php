<footer>
            <div class="container">
                <div class="logo">
                    <img src="<? echo get_template_directory_uri()?>/img/logo.png" alt="">
                </div>
                <div class="contact">
                    <h4>Контакты</h4>
                    <a href="tel:+375333263999"><?php the_field('footertellvit'); ?></a>
                    <a href="tel:+375333264999"><?php the_field('footertellgom'); ?></a>
                    <a href="tel:+375333265999"><?php the_field('footertellmog'); ?></a>
                </div>
               
                <div class="social">
                    <h4>Мы в соц. сетях</h4>
                    <div class="block-social">
                        <a href="<?php the_field('footervk'); ?>"><img src="<? echo get_template_directory_uri()?>/img/vk.png" alt=""></a>
                        <a href="<?php the_field('footerinst'); ?>"><img src="<? echo get_template_directory_uri()?>/img/insta.png" alt=""></a>
                    </div>
                </div>
                <div class="partners">
                    <h4>Наши партнеры</h4>
                    <a href="https://barbers.by/"><?php the_field('footerpartners'); ?></a>
                </div>
            </div>
        </footer>

        <!--burger-mobile-->
        <div class="burger-menu">
            <a href="" class="burger-menu_button">
                <spun class="burger-menu_lines"></spun>
            </a>
            <nav class="burger-menu_nav">
                <a href="#servicess" class="burger-menu_link">Наши услуги</a>
                <a href="#prisee" class="burger-menu_link">Цены</a>
                <a href="#galaryy" class="burger-menu_link">Примеры работ</a>
                <a href="#reviewss" class="burger-menu_link">Отзывы</a>
                <a href="#tabss" class="burger-menu_link">Контакты</a>
                <a href="#" class="burger-menu_link">Запись Online</a>
            </nav>
            <div class="burger-menu_overlay"></div>
        </div>


        <script>
            //script-burger
            function burgerMenu(selector) {
                let menu = $(selector);
                let button = menu.find('.burger-menu_button', '.burger-menu_lines');
                let links = menu.find('.burger-menu_link');
                let overlay = menu.find('.burger-menu_overlay');

                button.on('click', (e) => {
                    e.preventDefault();
                    toggleMenu();
                });

                links.on('click', () => toggleMenu());
                overlay.on('click', () => toggleMenu());

                function toggleMenu() {
                    menu.toggleClass('burger-menu_active');

                    if (menu.hasClass('burger-menu_active')) {
                        $('body').css('overlow', 'hidden');
                    } else {
                        $('body').css('overlow', 'visible');
                    }
                }
            }
            burgerMenu('.burger-menu');
        </script>
        
        <?php wp_footer(); ?>
    </body>
</html>