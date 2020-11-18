<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('barbers'); ?><?php wp_title('KiviKlean.by'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="Keywords" content=""> 
	<meta name="yandex-verification" content="82b6d511fd2d7fb8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php?>>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        
           ym(69506434, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/69506434" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <header>
             <div class="container">
                 <!--naviganion_block-->
                 <div class="navigation">
                     <div class="navigation__logo">
                         <img src="<? echo get_template_directory_uri()?>/img/logo.png" alt="">
                     </div>
                     <nav  id="menu">
                         <ul>
                             <li><a href="#servicess">Наши услуги</a></li>
                             <li><a href="#prisee">Цены</a></li>
                             <li><a href="#galaryy">Примеры работ</a></li>
                             <li><a href="#reviewss">Отзывы</a></li>
                             <li><a href="#tabss">Контакты</a></li>
                             <li><a class="navigation__button" href="#">Запись Online</a></li>
                         </ul>
                     </nav>
                 </div>
                 <!--naviganion_block_end-->

                 <!--content_block-->
                 <div class="header__content">
                     
                     <div class="header content__left">
                         <h1><?php the_field('titleheader'); ?></h1>
                         <p><?php the_field('desheader'); ?></p>
                         <a href="#">Запись Online</a>
                     </div>
                     <div class="header content__right">
                         <img src="<? echo get_template_directory_uri()?>/img/header-right-content.png" alt="">
                     </div>
                 </div>
                 <!--content_block_end-->
                 <div class="slider-wrapper">
                     <div id='slide-one'  class="owl-carousel owl-theme ">
                         <?php
                            global $post;
                            $args = array(
                                'posts_per_page' => 10,
                                'post_type' => 'services',
                                'publish' => true
                            );
                            $slider_service = get_posts($args);
                            foreach ($slider_service as $post){
                                include( get_template_directory() . '/header_slider.php');
                            }
                            wp_reset_postdata();
                        ?>
                     </div>
                 </div>
             </div>
        </header>
        <a id="buttonbt"></a>
        
        <script type="text/javascript">
             $(document).ready(function(){
                $("#menu").on("click","a", function (event) {
                    event.preventDefault();
                    var id  = $(this).attr('href'),
                        top = $(id).offset().top;
                    $('body,html').animate({scrollTop: top}, 1500);
                });
            });
        </script>
        
        <script>
           var btn = $('#buttonbt');
                $(window).scroll(function() {
                if ($(window).scrollTop() > 300) {
                    btn.addClass('show');
                } else {
                    btn.removeClass('show');
                }
            });
                btn.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop:0}, '300');
            });
       </script>

       