<?php get_header(); ?>
<main id="main-page">
    <section>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <?php the_post_thumbnail('medium'); ?>
                <h1><?php the_title(); ?></h1>
                <div id="bloc1">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
</main>
<?php get_footer(); ?>