<?php

$titleslider = get_post_meta(get_the_ID(), 'titleheaderslider', true );
?>          

<div class="slider__item">
    <img src="<?php the_field('sliderheaderimage'); ?>" alt="">
    <h3><?=$titleslider?></h3>
</div>