<?php
/**
 *Template Name: shop_login
 *
 * @package WordPress
 * @subpackage Shop
 */

get_header(); ?>
<?php include('wp-content/themes/shop_theme/categoriesLinks.php');?>

<section class="">
    <div class="container register">
        <div class="row m-auto">
            <div class="col-sm-6 m-4 register_form active_reg">
                <h2 class="mb-4">Log In</h2>
                <p class="mb-4">Enter Username and Password to log in</p>
                <?php echo do_shortcode('[ultimatemember form_id="9"]');?>

                <div class="reg_btn">
                    <a href="<?php the_permalink(31) ?>"><button class="login addActive" type="button">Sign Up</button></a>
                </div>

            </div>
            <div class="col-sm-5 register_bg"></div>
        </div>

    </div>
</section>
<?php get_footer(); ?>