<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading          = get_field('banner_heading');
    $backgroundImage  = get_field('banner_background_image');

?>


<section class="module module--contact-details <?= $className ?>">
    <div class="wrapper">
        
        <div class="contact-info wrapper-inner">
            <div class="offices">
            <div class="pin-icon"><strong>Our Offices</strong></div>
            <div class="flex">
                <?php if( have_rows('offices') ): ?>

                    <?php while( have_rows('offices') ) : the_row();
                        $locationImage = get_sub_field('location_image');
                        $locationName = get_sub_field('location_name');
                        $locationAddress = get_sub_field('location_address');
                    ?>
                        <div class="office-container">
                            <img data-src="<?=$locationImage;?>" />
                            <div class="office-details">
                                <strong><?=$locationName;?>:</strong>
                                <p><?=$locationAddress;?></p>
                            </div>
                        </div>
                 
                    <?php endwhile; ?>

                <?php endif; ?>
                
            </div>
        </div>

        <div class="phone-numbers">
            <div class="phone-icon"><strong>Phone</strong></div>
            <?php if( have_rows('phone_numbers') ): ?>

                <?php while( have_rows('phone_numbers') ) : the_row();
                    $phoneNumberlabel = get_sub_field('phone_number_label');
                    $phoneNumber = get_sub_field('phone_number');
                ?>
                    <p><span class="label"><?=$phoneNumberlabel; ?>:<span> <a href="tel:<?=$phoneNumber; ?>"><?=$phoneNumber; ?></a></p>
             
                <?php endwhile; ?>

            <?php endif; ?>
           
        </div>

        <div class="email-address">
            <div class="email-icon"><strong>Email</strong></div>
             <?php if( have_rows('email_address') ): ?>

                <?php while( have_rows('email_address') ) : the_row();
                    $emailLabel = get_sub_field('email_label');
                    $emailAddress = get_sub_field('email_address');
                ?>
                    <p><span class="label"><?= $emailLabel; ?>:<span> <a href="mailto:<?= $emailAddress; ?>"><?= $emailAddress; ?></a></p>
             
                <?php endwhile; ?>

            <?php endif; ?> 
            
        </div>
        </div>

        <div class="contact-form wrapper-inner">
            <div class="contact-form-container">
                <?php $hero = get_field('contact_form'); 

                    $contactFormHeading = $hero['contact_form_heading'];
                    $contactFormDescription = $hero['contact_form_description'];
                    $contactForm = $hero['contact_form'];
                ?>
                    <h3><?=$contactFormHeading;?></h3>
                    <p><?=$contactFormDescription;?></p>
                    <!-- <p><?=$contactForm;?></p> -->
                    <?= do_shortcode('[contact-form-7 id="'.$contactForm.'" title="Contact Form"]'); ?>
               
            </div>
        </div>
        
       
    </div>
</section>

