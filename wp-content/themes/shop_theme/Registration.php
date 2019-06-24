<?php
/**
 *Template Name: shop_registration
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
                <h2 class="mb-4">Register</h2>
                <p class="mb-4">Sign Up For Free</p>

                    <?php echo do_shortcode('[ultimatemember form_id="8"]');?>


                    <div class="reg_btn">
                        <a href="<?php the_permalink(52) ?>"><button class="login addActive" type="button">Log In</button></a>
                    </div>

            </div>
            <div class="col-sm-5 register_bg"></div>
        </div>

    </div>
</section>
<script>





</script>
<?php get_footer(); ?>
