<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $subheading     = get_field('sub_heading');
    $content     = get_field('content');
    $background_color     = get_field('background_color');
?>


<section class="module module--testimonial bg-dark <?= $className ?>" style="background-color: <?= $background_color ?>;">
    <div class="wrapper wrapper-border">
        <div class="section-heading text-center text-light">
            <h4 class="subheader"><?= $subheading ?></h4>
            <?php if ($heading) : ?>
                 <h2 class="module--title"><?= $heading ?></h2>
            <?php endif; ?>
              <?= $content ?>
        </div>
       
        <div class="testimonials text-light">
            <?php while( have_rows('testimonial') ): the_row(); ?>
                <div class="testimonials--item">
                    <?php 
                        $title      = get_sub_field('title');
                        $name       = get_sub_field('name');
                        $quote      = get_sub_field('quote');
                        $photo      = get_sub_field('photo');
                    ?>

                    <?= $quote ?>
                    
                    <!-- Testi Content -->
                    <div class="testi-content">
                        <img data-src="<?= get_template_directory_uri() ?>/img/rating.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Rating">

                        <p class="name"><?= $name ?></p>
                        <p class="company"><?= $title ?></p>
                    </div>

                    <!-- Testi Image -->
                    <?php if( !empty( $photo ) ): ?>
                    <div class="star-rating">
                        <img data-src="<?= $photo['url'] ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $photo['alt'] ?>">
                    </div>
                    <?php endif ?>

                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>

