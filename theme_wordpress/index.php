<?php get_header(); ?>

<main>
    <h2>Artikel Terbaru</h2>
    <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 20px;">

    <?php if ( have_posts() ) : ?>
        <div class="post-container">
           <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: #fff; border: 1px solid #e1e1e1; padding: 20px; border-radius: 6px;">
                    <h3><a href="<?php the_permalink(); ?>" style="color: #2c3e50; text-decoration: none;"><?php the_title(); ?></a></h3>
                    <p><small style="color: #777;">Diposting pada <?php the_date(); ?> oleh <?php the_author(); ?></small></p>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom: 15px;">
                            <?php the_post_thumbnail('medium', ['style' => 'max-width:100%; height:auto; border-radius:4px;']); ?>
                        </div>
                    <?php endif; ?>

                    <div><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" style="display:inline-block; margin-top:10px; color:#3498db; text-decoration:none;">Baca Selengkapnya &raquo;</a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Fitur Pagination -->
        <div class="pagination" style="clear: both; margin-top: 40px;">
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
</main>

<?php get_footer(); ?>
