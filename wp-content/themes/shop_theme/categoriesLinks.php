<div class="container">
    <div class="row categories">
        <div>
            <?php  ?>
            <a href="<?php
            echo get_home_url();
            ?>">Home</a>
            <span>&#62;</span>

            <a href="<?php the_permalink() ?>"><?php the_title()?></a>
        </div>
    </div>
</div>