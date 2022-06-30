<?php get_header(); ?>
<main id="main-article">
    <article>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail('medium_large'); ?>
            <h1 id="title-single"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <button id="button">
                <a href="http://localhost/Coding/wordpress">Retour</a>
            </button>
        <?php endwhile; ?>
    </article>
</main>
<?php get_footer(); ?>