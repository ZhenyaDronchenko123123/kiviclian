<?php
$autorrev = get_post_meta(get_the_ID(), 'namepersonrev', true );
$datarev = get_post_meta(get_the_ID(), 'datarev', true );
$textrev = get_post_meta(get_the_ID(), 'textrev', true ); 
?>          

<div class="slider__item">
    <div class="slider__title-date">
        <h3><?=$autorrev?></h3>
        <time><?=$datarev?></time>
    </div>
    <p><?=$textrev?></p>
</div>