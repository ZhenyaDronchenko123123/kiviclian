<?php
$numservice = get_post_meta(get_the_ID(), 'numberservece', true );
$servic = get_post_meta(get_the_ID(), 'nameservicestv', true );
$desservice = get_post_meta(get_the_ID(), 'desservices', true );
$titlednser = get_post_meta(get_the_ID(), 'titledownboots', true );
$firstel = get_post_meta(get_the_ID(), 'elfirst', true );
$secondel = get_post_meta(get_the_ID(), 'eltwo', true );
$thelem = get_post_meta(get_the_ID(), 'elthree', true );
$fourthel= get_post_meta(get_the_ID(), 'elfourth', true );
?>          
<div class="item__leftslider">       
    <div class="services-number">
        <h4>Наши услуги</h4>
        <span><?=$numservice?></span>
    </div>
    <div class="services-description">
        <h3><?=$servic?></h3>
        <p><?=$desservice?></p>
    </div>  
    <div class="criterion">
        <h4><?=$titlednser?></h4>
        <div class="criterion-item">
            <ul>
                <li><?=$firstel?></li>
                <li><?=$secondel?></li>
                <li><?=$thelem?></li>
                <li><?=$fourthel?></li>
            </ul>
        </div>
    </div>
</div>