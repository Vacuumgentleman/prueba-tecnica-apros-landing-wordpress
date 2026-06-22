<?php get_header(); ?>

<main id="contenido-principal">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="entrada-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No se encontró contenido.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
