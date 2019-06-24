<?php ?>
    <footer>
        <div class="container">
            <div class="row footer_row1">
                <div class="col-sm-3 footer_cols">
                    <h6>About Company</h6>
                    <p>psum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia risus ac turpis vestibulum euismod. Nulla ut massa aliquam mm </p>
                </div>
                <div class="col-sm-3 footer_cols">
                    <h6>Navigation Bar</h6>
                    <?php
                    // Login navigation
                    if ( has_nav_menu( 'account_menu') ) {
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'account_menu',
                                'container'       => 'div',
                                'menu_class'      => '',
                                // 'echo'            => true
                            )
                        );
                    } ?>
                </div>
                <div class="col-sm-3 footer_cols info">
                    <h6>Contact Us</h6>
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/email.png">
                            <p>info@mail.ru</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/telephone.png">
                            <p>+75  65 78 99 88</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/location.png">
                            <p>City 212/21</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 footer_cols social">
                    <h6>FOLLOW US</h6>
                    <ul>
                        <li><a><img src="<?php echo get_template_directory_uri(); ?>/img/facebool.png"></a></li>
                        <li><a><img src="<?php echo get_template_directory_uri(); ?>/img/google.png"></a></li>
                        <li><a><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"></a></li>
                        <li><a><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <p> &#9400; Copyright 2019  | All rights reserved.</p>
            </div>
        </div>
    </footer>
    </body>
    </html>
<?php wp_footer(); ?>