<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Shop
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php

    $id = get_the_ID(); ?>
    <div class="container">
        <div class="row categories">
            <div>
                <a href="#">Home</a>
                <span>&#62;</span>
                <a href="#"><?php the_title()?></a>
            </div>
        </div>
    </div>

    <section class="single_sec">
        <div class="container">
            <div class="row">
                    <h3><?php the_title()?></h3>
                    <?php the_content() ?>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
