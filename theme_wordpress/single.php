<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post-card">
            <h2 style="color: #111111; margin-top:0;"><?php the_title(); ?></h2>
            <p><small style="color: #666;">Diposting pada <?php the_date(); ?> oleh <?php the_author(); ?></small></p>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin: 20px 0; text-align: center;">
                    <?php the_post_thumbnail('large', ['style' => 'max-width:100%; height:auto; border-radius:6px; display:inline-block;']); ?>
                </div>
            <?php endif; ?>

            <div style="line-height: 1.8; color: #333;">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
