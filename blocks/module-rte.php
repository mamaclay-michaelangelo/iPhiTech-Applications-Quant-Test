<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $textalign = get_field('text_align');
    $text_color             = get_field('text_color');
    $subheader        = get_field('subheader');
    $heading        = get_field('heading');
    $content        = get_field('content');
    $background     = get_field('background');
?>


<section class="module module--rte <?= $className ?>" style="background-color: <?= $background['background_color'] ?>;">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
    <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>
    <div class="wrapper wrapper-border">
        <div class="rte-content" style="text-align: <?= $textalign ?>; color: <?= $text_color ?>">
            <p class="subheader"><?= $subheader ?></p>
            <h3 class="module--tile"><?= $heading ?></h3>
            <?= $content ?>
        </div>
    </div>
</section>

