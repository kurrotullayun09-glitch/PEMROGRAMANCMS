<?php get_header(); ?>

<main>
    <h2 style="color: #111111; margin-top:0;">Artikel Terbaru</h2>
    <hr style="border: 0; border-top: 2px solid #3498db; margin-bottom: 25px;">

    <?php if ( have_posts() ) : ?>
        <div class="post-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><small style="color: #666;">Diposting pada <?php the_date(); ?> oleh <?php the_author(); ?></small></p>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin: 15px 0; text-align: center;">
                            <?php the_post_thumbnail('medium', ['style' => 'max-width:100%; height:auto; border-radius:6px; display:inline-block;']); ?>
                        </div>
                    <?php endif; ?>

                    <div><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Baca Selengkapnya &raquo;</a>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'    => '?paged=%#%',
                'current'   => max( 1, get_query_var('paged') ),
                'total'     => $wp_query->max_num_pages,
                'prev_text' => __('&laquo; Sebelumnya'),
                'next_text' => __('Berikutnya &raquo;'),
            ) );
            ?>
        </div>

    <?php else : ?>
        <p><?php _e( 'Belum ada post yang ditemukan.' ); ?></p>
    <?php endif; ?>

    <div class="sidebar-box">
        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>
