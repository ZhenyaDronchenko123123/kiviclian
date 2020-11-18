<?php get_header();?>
<?php the_post();?>
<?php the_content();?>
	
    <section class="services" id="servicess" >
            <div class="container">
                <h2>Наши услуги</h2>
                <div class="services__item">

                    <div class="services__item-left">

                        <div  id="slide-two" class="owl-carousel owl-theme">
                            <?php
                                global $post;
                                $args = array(
                                    'posts_per_page' => 10,
                                    'post_type' => 'ourservices',
                                    'publish' => true
                                );
                                $slider_services = get_posts($args);
                                foreach ($slider_services as $post){
                                    include( get_template_directory() . '/ourslider_services.php');
                                }
                                wp_reset_postdata();
                            ?>
                        </div>  
                    </div>

                    <div class="services__item-right">
                        <img class="services__ellips" src="<? echo get_template_directory_uri()?>/img/Ellipse 2.png" alt="">
                        <img class="photo__services" src="<? echo get_template_directory_uri()?>/img/Mask2.jpg" alt="">
                        <a href="#"><img src="<? echo get_template_directory_uri()?>/img/Group3.jpg" alt=""></a>
                    </div>
                </div>
            </div>    
        </section>


        <section class="prise" id="prisee">
            <div class="container">
                <h2>Наши цены</h2>
                <div class='flex-container'>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise1'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise1'); ?></h3>
                            <p><?php the_field('cashprise1'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise2'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise2'); ?></h3>
                            <p><?php the_field('cashprise2'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise3'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise3'); ?></h3>
                            <p><?php the_field('cashprise3'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise4'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise4'); ?></h3>
                            <p><?php the_field('cashprise4'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise5'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise5'); ?></h3>
                            <p><?php the_field('cashprise5'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise6'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise6'); ?></h3>
                            <p><?php the_field('cashprise6'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise7'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise7'); ?></h3>
                            <p><?php the_field('cashprise7'); ?></p>
                        </div>
                    </div>
                    <div class="flex__item">
                        <div class="flex-images">
                            <img src="<?php the_field('photoprise8'); ?>" alt="">
                        </div>
                        <div class="flex__item_prise">
                            <h3><?php the_field('titleprise8'); ?></h3>
                            <p><?php the_field('cashprise8'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="galary" id="galaryy">
            <div class="container">
                <h2>Примеры работ</h2>
                <div class="container-preview-slider">

                	<figure class="cd-image-container">
                        <img class="services__ellips" src="<?php the_field('photoprem1'); ?>" alt="">
                		<span class="cd-image-label" data-type="original"></span>
                
                		<div class="cd-resize-img"> <!-- the resizable image on top -->
                        <img class="services__ellips" src="<?php the_field('photoprem1before'); ?>" alt="">
                			<span class="cd-image-label" data-type="modified"></span>
                		</div>
                
                		<span class="cd-handle"></span>
                	</figure> <!-- cd-image-container -->
                
                
                	<figure class="cd-image-container">
                        <img class="services__ellips" src="<?php the_field('photoprem2'); ?>" alt="">
                		<span class="cd-image-label" data-type="original"></span>
                
                		<div class="cd-resize-img"> <!-- the resizable image on top -->
                        <img class="services__ellips" src="<?php the_field('photoprem2before'); ?>" alt="">
                			<span class="cd-image-label" data-type="modified"></span>
                		</div>
                
                		<span class="cd-handle"></span>
                	</figure> <!-- cd-image-container -->
                
                
                	<figure class="cd-image-container">
                        <img class="services__ellips" src="<?php the_field('photoprem3'); ?>" alt="">
                		<span class="cd-image-label" data-type="original"></span>
                
                		<div class="cd-resize-img"> <!-- the resizable image on top -->
                        <img class="services__ellips" src="<?php the_field('photoprem3before'); ?>" alt="">
                			<span class="cd-image-label" data-type="modified"></span>
                		</div>
                
                		<span class="cd-handle"></span>
                	</figure> <!-- cd-image-container -->
                
                	<figure class="cd-image-container">
                        <img class="services__ellips" src="<?php the_field('photoprem4'); ?>" alt="">
                		<span class="cd-image-label" data-type="original"></span>
                
                		<div class="cd-resize-img"> <!-- the resizable image on top -->
                        <img class="services__ellips" src="<?php the_field('photoprem4before'); ?>" alt="">
                			<span class="cd-image-label" data-type="modified"></span>
                		</div>
                
                		<span class="cd-handle"></span>
                	</figure> <!-- cd-image-container -->
                
                	<figure class="cd-image-container">
                        <img class="services__ellips" src="<?php the_field('photoprem5'); ?>" alt="">
                		<span class="cd-image-label" data-type="original"></span>
                
                		<div class="cd-resize-img"> <!-- the resizable image on top -->
                        <img class="services__ellips" src="<?php the_field('photoprem5before'); ?>" alt="">
                			<span class="cd-image-label" data-type="modified"></span>
                		</div>
                
                		<span class="cd-handle"></span>
                	</figure> <!-- cd-image-container -->
                
                	<figure class="cd-image-container">
                        <img class="services__ellips" src="<?php the_field('photoprem6'); ?>" alt="">
                		<span class="cd-image-label" data-type="original"></span>
                
                		<div class="cd-resize-img"> <!-- the resizable image on top -->
                        <img class="services__ellips" src="<?php the_field('photoprem6before'); ?>" alt="">
                			<span class="cd-image-label" data-type="modified"></span>
                		</div>
                
                		<span class="cd-handle"></span>
                	</figure> <!-- cd-image-container -->
                </div>
            </div>
            <a class="button_inst" href="https://www.instagram.com/kiviclean.by/?igshid=1l2tyuxh2gtqe">Просмотреть наш инстаграм</a>
        </section>

        <section class="reviews" id="reviewss">
            <div class="container">
                <div class="reviews__top-content">
                    <div class="top-content__title">
                        <p>С нами приятно</p>
                        <p>сотрудничать</p>
                    </div>
                </div>
                <div id="slide-review"  class="owl-carousel owl-theme">
                <?php
                    global $post;
                    $args = array(
                        'posts_per_page' => 10,
                        'post_type' => 'reviews',
                        'publish' => true
                    );
                    $slider_reviews = get_posts($args);
                        foreach ($slider_reviews as $post){
                            include( get_template_directory() . '/reviews_slider.php');
                        }
                        wp_reset_postdata();
                ?>
                </div>
            </div>
        </section>

        <section class="questions" id="questionss">
            <div class="container">
                <h2>Ответы на популярные вопросы</h2>
                <div class="questions__block">
                    <div class="questions__block items">
                        <div class="questions__block-collapse top">
                            <p><?php the_field('firstquestions1'); ?></p>
                            <button class="collapsible"><img src="<? echo get_template_directory_uri()?>/img/cross.png" alt=""></button>
                        </div>
                        <div class="content">
                            <p><?php the_field('dessquestions1'); ?></p>
                        </div>
                    </div>
                    <div class="questions__block items">
                        <div class="questions__block-collapse">
                            <p><?php the_field('firstquestions2'); ?></p>
                            <button class="collapsible"><img src="<? echo get_template_directory_uri()?>/img/cross.png" alt=""></button>
                        </div>
                        <div class="content">
                            <p><?php the_field('dessquestions2'); ?></p>
                        </div>
                    </div>
                    <div class="questions__block items">
                        <div class="questions__block-collapse">
                            <p><?php the_field('firstquestions3'); ?></p>
                            <button class="collapsible"><img src="<? echo get_template_directory_uri()?>/img/cross.png" alt=""></button>
                        </div>
                        <div class="content">
                            <p><?php the_field('dessquestions3'); ?></p>
                        </div>
                    </div>
                    <div class="questions__block items">
                        <div class="questions__block-collapse">
                            <p><?php the_field('firstquestions4'); ?></p>
                            <button class="collapsible"><img src="<? echo get_template_directory_uri()?>/img/cross.png" alt=""></button>
                        </div>
                        <div class="content">
                            <p><?php the_field('dessquestions4'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stock" id="stockk">
            <div class="container">
                <div class="stock__content">
                    <div class="stock__title">
                        <h3>Акция</h3>
                        <h4><?php the_field('titlesalle'); ?></h4>
                    </div>
                    <p><?php the_field('desssalle'); ?></p>
                    <i><?php the_field('prsalle'); ?></i>
                </div>
            </div>
        </section>

        <section class="tabs" id="tabss">
            <div class="tabs__nav">
                <button class="tabs__nav-btn" type="button" data-tab="#tab_1">Витебск</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_2">Гомель</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_3">Могилев</button>
            </div>
            <div class="tabs__content">
                <div class="tabs__item" id="tab_1">
                    <div class="tabs__item-left">
                        <h3>Химчистка обуви Kivi clean 
                            <br>в Витебске</h3>
                        <p><img src="<? echo get_template_directory_uri()?>/img/geo.png" alt=""><span>Адрес:</span><?php the_field('vitadress'); ?></p> 
                        <p><img src="<? echo get_template_directory_uri()?>/img/time.png" alt=""><span>Режим работы:</span><?php the_field('vitwork'); ?></p> 
                        <p><img src="<? echo get_template_directory_uri()?>/img/phone.png" alt=""><span>Телефон:</span><?php the_field('vittell'); ?></p> 
                    </div>
                    <div class="tabs__item-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d142.35451474049077!2d30.205085679086!3d55.18900284026772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46c573e30008ee6f%3A0x7d0a3b13ed3b1c89!2z0JHQsNGA0LHQtdGA0YjQvtC_IEJhcmJlclMgKNCR0LDRgNCx0LXRgNGBKQ!5e0!3m2!1sru!2sby!4v1596473043068!5m2!1sru!2sby" width="100%" height="390" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>           
                </div>
                <div class="tabs__item" id="tab_2">
                    <div class="tabs__item-left">
                        <h3>Химчистка обуви Kivi clean 
                            <br>в Гомеле</h3>
                        <p><img src="<? echo get_template_directory_uri()?>/img/geo.png" alt=""><span>Адрес:</span><?php the_field('gomadress'); ?></p> 
                        <p><img src="<? echo get_template_directory_uri()?>/img/time.png" alt=""><span>Режим работы:</span><?php the_field('gomwork'); ?></p> 
                        <p><img src="<? echo get_template_directory_uri()?>/img/phone.png" alt=""><span>Телефон:</span><?php the_field('gomtell'); ?></p> 
                    </div>
                    <div class="tabs__item-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d304.09227613564434!2d31.00650575110475!3d52.42954100656305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d469ab57f55e89%3A0xe18a9c0367ee2a0b!2z0JHQsNGA0LHQtdGA0YjQvtC_IEJhcmJlclMgKNCR0LDRgNCx0LXRgNGBKQ!5e0!3m2!1sru!2sby!4v1594393297782!5m2!1sru!2sby" width="100%" height="390" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div> 
                </div>
                <div class="tabs__item" id="tab_3">
                    <div class="tabs__item-left">
                        <h3>Химчистка обуви Kivi clean 
                            <br>в Могилеве</h3>
                        <p><img src="<? echo get_template_directory_uri()?>/img/geo.png" alt=""><span>Адрес:</span><?php the_field('mogadress'); ?></p> 
                        <p><img src="<? echo get_template_directory_uri()?>/img/time.png" alt=""><span>Режим работы:</span><?php the_field('mogwork'); ?></p> 
                        <p><img src="<? echo get_template_directory_uri()?>/img/phone.png" alt=""><span>Телефон:</span><?php the_field('mogtell'); ?></p> 
                    </div>
                    <div class="tabs__item-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d293.7842997486148!2d30.33325417902253!3d53.90909971505002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d051dfd179241b%3A0x9670bb23c11a60be!2z0JHQsNGA0LHQtdGA0YjQvtC_IEJhcmJlcidTICjQkdCw0YDQsdC10YDRgSk!5e0!3m2!1sru!2sby!4v1596473186583!5m2!1sru!2sby" width="100%" height="390" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div> 
                </div>
            </div>
        </section>

        <script>
                                
                //tabs
                const tabsBtn   = document.querySelectorAll(".tabs__nav-btn");
                const tabsItems = document.querySelectorAll(".tabs__item");

                tabsBtn.forEach(onTabClick);

                function onTabClick(item) {
                    item.addEventListener("click", function() {
                        let currentBtn = item;
                        let tabId = currentBtn.getAttribute("data-tab");
                        let currentTab = document.querySelector(tabId);

                        if( ! currentBtn.classList.contains('active') ) {
                            tabsBtn.forEach(function(item) {
                                item.classList.remove('active');
                            });

                            tabsItems.forEach(function(item) {
                                item.classList.remove('active');
                            });

                            currentBtn.classList.add('active');
                            currentTab.classList.add('active');
                        }
                    });
                }

                document.querySelector('.tabs__nav-btn').click();
        </script>

        <script>
            let coll = document.getElementsByClassName("questions__block-collapse");
            for (let i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function(){
                    this.classList.toggle("active");
                    let content = this.nextElementSibling;
                    if (content.style.maxHeight){
                        content.style.maxHeight = null;
                    }else{
                        content.style.maxHeight = content.scrollHeight + "2px";
                        content.style.height = "100px"
                        content.style.paddingLeft = "50px"
                    }
                })
            }
        </script>
        
		<?php
get_footer();

