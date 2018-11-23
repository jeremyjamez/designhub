<?php /* Template Name: Customize Page */ ?>

<?php get_header('child'); ?>

<div class="container">
            <div class="row">
                <div class="content">
                    <div class="row group">
                        <div class="col col12">
                            <?php while(have_posts()) : the_post(); ?>
                                <div class="format-content">
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>