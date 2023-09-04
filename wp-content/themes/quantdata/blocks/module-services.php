<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $background_color     = get_field('background_color');
?>


<section class="module module--services <?= $className ?>" style="background-color: <?= $background_color ?>;">

    <?php if( have_rows('services') ): ?>
    <div class="wrapper">

        <!-- Services List -->
        <?php while( have_rows('services') ): the_row(); 
        $subheader        = get_sub_field('subheader');
        $content        = get_sub_field('content'); ?>
        <div class="services-row">
            <div class="content-services">
                <p class="subheader"><?= $subheader ?></p>
                <?= $content ?>
                <?php
              $button_link = get_sub_field('link');
              if( $button_link ):
                  $link_url = $button_link['url'];
                  $link_title = $button_link['title'];
                  $link_target = $button_link['target'] ? $button_link['target'] : '_self';
                  ?>
                  <a class="btn btn--primary"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>

            </div>

            <!-- Images List -->
            <div class="content-img">
                <?php $count = count(get_sub_field('images')); 
                while( have_rows('images') ): the_row(); 
                $image        = get_sub_field('image');  ?>
                    <img data-src="<?= $image['url'] ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $logo['alt'] ?>" style="<?php if ( $count > 1 ) : ?>width: 50%; padding-right: 15px;<?php else: ?> width: 100%; padding: 0 !important;<?php endif;?>" >
                <?php endwhile ?>
            </div>
        </div>
        <?php endwhile ?>

    </div>
    <?php endif ?>

</section>

