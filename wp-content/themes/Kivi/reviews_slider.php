<?php
$name = get_post_meta(get_the_ID(), 'namepersonrev', true );
$datatime = get_post_meta(get_the_ID(), 'datarev', true );
$descript = get_post_meta(get_the_ID(), 'textrev', true );
?>       
<div class="reviews_slider">
    <div class="top_content">
        <p class="name"><?=$name?></p>
        <span class="date"><?=$datatime?></span>
    </div>
    <div class="des_revievs">
        <p><?=$descript?></p>
    </div>    
</div>