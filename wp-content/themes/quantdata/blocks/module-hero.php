<?php 
    $className = !empty($block['className']) ? $block['className'] : null;

?>

<?php 
$banner = get_field('banner');

if( have_rows('banner') ): ?>
<section class="module module--hero <?= $className ?>">
    <div class="hero-banner  <?php if (count($banner) > 1) : ?>js-hero owl-carousel<?php endif; ?>">
        <?php while( have_rows('banner') ): the_row(); ?>
            <?php 
                $background          = get_sub_field('background');
                $heading             = get_sub_field('heading');
                $intro_text          = get_sub_field('intro_text');
                $text_color             = get_sub_field('text_color');
                $cta                 = get_sub_field('cta');
                $desktop_alignment   = get_sub_field('desktop_alignment');
                $mobile_alignment    = get_sub_field('mobile_alignment');
            ?>

            <div class="hero-item" <?php if (count($banner) == 1) : ?>style="background-image: url(<?= $background['desktop']['url'] ?>) ;" <?php endif; ?>>

            <?php if (count($banner) < 1) : ?>

                <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
                    <?= responsive_image( $background['mobile']['ID'], $background['desktop']['ID'], 'bg' ) ?>
                <?php endif ?>

            <?php endif; ?>

                
                <div class="wrapper absolute-center">
                    <div class="hero-content desktop-<?= $desktop_alignment['horizontal'] ?> desktop-<?= $desktop_alignment['vertical'] ?> mobile-<?= $mobile_alignment['horizontal'] ?> mobile-<?= $mobile_alignment['vertical'] ?>">

                    
                        <div class="hero-text" style="color: <?= $text_color ?>;">
                            <h1 class="hero-title"><?= $heading ?></h1>
                            <?= $intro_text ?>
                             <?php if( !empty( $cta ) ): ?>
                                <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?></a>
                            <?php endif ?>
                        </div>

                        <div class=" hero-image absolute-center">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="<?php echo get_template_directory_uri(); ?>/js/lf20_sks7ujsb.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</section>
<?php endif ?>

