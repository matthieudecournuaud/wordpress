<?php get_header(); ?>
<div>
    <h1><?php bloginfo('name'); ?></h1>
</div>
<main id="accueil">
    <section>
        <article>
            <?php while (have_posts()) : the_post(); ?>
                <div>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">
                        Lire
                    </a>
                </div>
            <?php endwhile; ?>
        </article>
    </section>
</main>
<?php get_footer(); ?>