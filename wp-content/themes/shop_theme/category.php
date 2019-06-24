<?php
/**
 *
 */
get_header();?>
<?php include('wp-content/themes/shop_theme/categoriesLinks.php');?>

<section>
    <div class="container container3">
        <div class="row">
            <div class="items col-sm-12">
                <?php

                $args = array( 'cat' => 3 , 'posts_per_page' => 20 );
                $query = new WP_Query( $args );
                ?>
                <?php
                while ($query->have_posts()) : $query->the_post(); ?>
                <div class="post">
                    <div class="shop_images">
                        <div class="shop_item">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <div class="hearthimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shop_hearth.png">
                        </div>
                    </div>

                    <div class="justify">
                        <?php the_content() ?>
                        <div class="price">
                            <div class="blue_a"><a href="<?php the_permalink() ?>">Check it Out</a></div>
                            <div class="post_time">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <p><?php the_date() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>

        </div>
    </div>
    <div class="container">
        <div class="row pages">
            <button class="blue_button">1</button>
            <button class="blue_button">2</button>
            <button class="blue_button">3</button>
            <button class="blue_button">4</button>
            <button class="blue_button">&#62;</button>

        </div>
    </div>
</section>

<?php get_footer(); ?>
