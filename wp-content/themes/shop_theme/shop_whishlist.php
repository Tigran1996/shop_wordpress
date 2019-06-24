<?php
/**
 *Template Name: shop_whishlist
 *
 * @package WordPress
 * @subpackage Trinstar
 */

get_header(); ?>
<?php include('wp-content/themes/shop_theme/categoriesLinks.php');?>

<section class="whishlist">
    <div class="container">
        <?php

        $args = array( 'cat' => 3 , 'posts_per_page' => 10 );
        $query = new WP_Query( $args );
        ?>
        <?php
        while ($query->have_posts()) : $query->the_post(); ?>
        <div class="row whishlist_row">
            <div class="post_whishlist">
                <div class="shop_images">
                    <div class="shop_item">
                        <?php the_post_thumbnail() ?>
                    </div>
                </div>

                <div class="whishlist_justify">
                    <div class="header_item">
                        <h4><?php the_title()?></h4>
                        <div class="whish_p1"> <?php the_content() ?></div>
                    </div>

                    <p class="whish_p2">Price <span>$25</span></p>
                    <div class="blue_a"><a href="<?php the_permalink() ?>">Check it Out</a></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/zibil.png" alt="">
                </div>
            </div>
        </div>
        <?php endwhile; ?>

    </div>
</section>
<section class="whishlist2">
    <div class="container">
        <h2>New Arrivals</h2>
        <div class="row">
            <div class="items">
                <div class="post">
                    <div class="shop_images">
                        <div class="shop_item">
                            <img src="img/shop3.png">

                        </div>
                        <div class="hearthimg">
                            <img src="img/shop_hearth.png">
                        </div>
                    </div>

                    <div class="justify">
                        <p> ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia risus ac turpis vestibulum euismod. Nulla ut massa aliquam mi varius sempe</p>
                        <div class="price">
                            <p>Price <span>$25</span></p>
                            <div class="blue_a"><a href="#">Check it Out</a></div>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="shop_images">
                        <div class="shop_item">
                            <img src="img/shop3.png">

                        </div>
                        <div class="hearthimg">
                            <img src="img/shop_hearth.png">
                        </div>
                    </div>

                    <div class="justify">
                        <p> ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia risus ac turpis vestibulum euismod. Nulla ut massa aliquam mi varius sempe</p>
                        <div class="price">
                            <p>Price <span>$25</span></p>
                            <div class="blue_a"><a href="#">Check it Out</a></div>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="shop_images">
                        <div class="shop_item">
                            <img src="img/shop2.png">

                        </div>
                        <div class="hearthimg">
                            <img src="img/shop_hearth.png">
                        </div>
                    </div>

                    <div class="justify">
                        <p> ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia risus ac turpis vestibulum euismod. Nulla ut massa aliquam mi varius sempe</p>
                        <div class="price">
                            <p>Price <span>$25</span></p>
                            <div class="blue_a"><a href="#">Check it Out</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php get_footer(); ?>
