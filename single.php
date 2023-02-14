<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>
        <div class="hero paralax post__hero">
            <div class="paralax-bg"></div>
            
            <h1 class="post__title"><?php the_title(); ?></h1>
        </div>

        <div class="section bg-white">
            <div class="container">
                <div class="post__body">
                    <p><?php echo get_the_date(); ?></p>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
