<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin: 20px 0;">
                    <?php the_post_thumbnail('large', ['style' => 'max-width:100%; height:auto; border-radius:4px;']); ?>
                </div>
            <?php endif; ?>

            <div style="line-height: 1.6;">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
