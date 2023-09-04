<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $text_color             = get_field('text_color');
    $background_color     = get_field('background_color');
?>


<section class="module module--three-column <?= $className ?>" style="background-color: <?= $background_color ?>;">

    <?php if( have_rows('column_content') ): ?>
    <div class="wrapper">
        <div class="three-col-row flex flex-wrap">

            <?php while( have_rows('column_content') ): the_row(); 
            $textalign = get_sub_field('text_align');
            $heading        = get_sub_field('heading');
            $content        = get_sub_field('content'); ?>

            <div class="content-col" style="color: <?= $text_color ?>; text-align: <?= $textalign ?>;">
                <h2><?= $heading ?></h2>
                <?= $content ?>
            </div>
            <?php endwhile ?>
        </div>
    </div>
    <?php endif ?>

</section>

