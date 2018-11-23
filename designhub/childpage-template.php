<?php /* Template Name: Child Page 
          Template Post Type: post, page, product*/ ?>

<?php get_header('child'); ?>

<div class="container">
            <div class="row">
                <div class="content">
                    <div class="row group">
                        <div class="col col10">
                            <?php while(have_posts()) : the_post(); ?>
                                <div class="format-content">
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
<?php get_footer(); ?>
