<?php get_header(); ?>

<div class="flexie main-container major-center col">

<div class="main-content flexie major-between minor-start">

        <div class="content-area flexie gray col major-between shadow">

            <?php if ( have_posts() ) : ?>
 
            <header class="page-header green">
                <h2 class="page-title">
                    <?php
                        if ( is_category() ) {
                            printf(__('<span class="green"></span><span class="red-h">' . single_cat_title( '', false ) . '</span>'));
             
                        } elseif ( is_tag() ) {
                            printf(__('<span class="green">Etiqueta: </span><span class="red-h">' . single_tag_title( '', false ) . '</span>'));
             
                        } elseif ( is_author() ) {
                            /* Queue the first post, that way we know
                             * what author we're dealing with (if that is the case).
                            */
                            the_post();
                            printf( __( 'Autor: %s', 'shape' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();
             
                        } elseif ( is_day() ) {
                            printf( __( 'Archivos Diarios: %s', 'shape' ), '<span>' . get_the_date() . '</span>' );
             
                        } elseif ( is_month() ) {
                            printf( __( 'Archivos por Mes: %s', 'shape' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
             
                        } elseif ( is_year() ) {
                            printf( __( 'Archivos por Año: %s', 'shape' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
             
                        } else {
                            _e( 'Archivos', 'shape' );
             
                        }
                    ?>
                </h2>
                <?php
                    if ( is_category() ) {
                        // show an optional category description
                        $category_description = category_description();
                        if ( ! empty( $category_description ) )
                            echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
             
                    } elseif ( is_tag() ) {
                        // show an optional tag description
                        $tag_description = tag_description();
                        if ( ! empty( $tag_description ) )
                            echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
                    }
                ?>
            </header><!-- .page-header -->
             
             
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
             
                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to overload this in a child theme then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                ?>
                
                <article class="post flexie l-12 major-center col">
                <div class="post-header flexie l-12 col">
                    <div class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div>
                    <div class="post-data"><?php the_date(); ?> por <?php the_author(); ?> en <?php the_category(', '); ?></div>
                </div>
                <div class="post-content row left">
                    <div class="thumbnail left">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'post-thumb' ); } ?>
                        </a>
                    </div>
                    <p class="excerpt text left"><?php the_excerpt(); ?></p>
                </div>
                <div class="post-button">
                    <a href="<?php echo get_page_link($post_id); ?>"><div class="post-link red button-shadow">Leer más</div></a>
                </div>

                <hr>
            </article>
             
            <?php endwhile; ?>
             
            <?php else : ?>
             
            <?php get_template_part( 'no-results', 'archive' ); ?>
             
            <?php endif; ?>


        </div>
        <?php get_sidebar(); ?>
        <!-- <div id="sidebar-side" class="widget-area clearfix gray shadow" role="complementary">

            <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>   

            <?php endif; // end sidebar widget area ?>
        </div><!-- #sidebar .widget-area --> 
    </div>

</div>
<?php get_footer(); ?>
