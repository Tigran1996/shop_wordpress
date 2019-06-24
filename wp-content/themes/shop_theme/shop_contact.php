<?php
/**
 *Template Name: shop_contact
 *
 * @package WordPress
 * @subpackage Trinstar
 */

get_header(); ?>
<?php include('wp-content/themes/shop_theme/categoriesLinks.php');?>

<section class="">
    <div class="container contact">
        <div class="row m-auto">
            <div class="col-sm-6 m-4">
                <h2 class="mb-4">Let’s Talk</h2>
                <p class="mb-4">Manage, analyze and improve your supply chain quality from a single platform.
                    Use our global network of qualified inspectors, auditors and labs.</p>
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]');?>

                <div class="row contact_inf_row">
                    <div class="Contact_info ml-2">
                        <div class="gold_circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/contact_mail.png" alt="">

                        </div>
                        <div class="justify">
                            <span>Email</span>
                            <p>info@mai.ru</p>
                        </div>

                    </div>
                    <div class="Contact_info ml-2">
                        <div class="gold_circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/contact_tel.png" alt="">

                        </div>
                        <div class="justify">
                            <span>Phone Number</span>
                            <p>+25 44 55 77 </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-5 contact_bg"></div>
        </div>

    </div>
</section>


<?php get_footer(); ?>