<? /* Template Name: Front Page*/?>
<?php get_header(); ?>

            <div class="container">
                <div class="row group">
                    <div class="col col6">
                        <div id="greeting"></div>
                        <h2 id="header-text"><?php echo get_bloginfo('description'); ?></h2>

                        <blockquote>&quot;The first step toward success is taken when you refuse to be a captive of the
                            environment in which you first find yourself.&quot;
                            &dash;Mark Caine</blockquote>
                    </div>
                    <div class="col col6">
                        <img src="<?php echo get_template_directory_uri() . '/img/undraw_product_tour_foyt.svg'; ?>" class="responsive-img style-svg">
                    </div>
                </div>
            </div>

            <div id="secondary-nav">
            
            <?php wp_nav_menu(array('theme_location' => 'secondary-menu', 'container_class' => 'bottom-nav-list')) ?>
            </div>
        
<?php get_footer(); ?>