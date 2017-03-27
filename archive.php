<?php get_header(); ?>

<div class="main-container">


            <?php if ( have_posts() ) : ?>
 
            <header class="page-header green">
                <h2 class="page-title">
                    <?php
                        if ( is_category() ) {
                            printf(__('<span class="green">Categoría: </span><span class="red-h">' . single_cat_title( '', false ) . '</span>'));
             
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
                
                <div class="post-area">
            

 
            
            <article class="post">
                <div class="post-content">
                    <div class="post-header">
                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                        <div class="post-date"><?php the_date(); ?> </div>
                    </div>
                    <div class="tags"><?php echo the_tags( '#', ' #', '' ); ?></div>
                    <p class="excerpt text left"><?php the_excerpt(); ?></p>
                    <div class="post-button">
                        <a href="<?php echo get_page_link($post_id); ?>">
                            <div class="post-link"><span style="color: #8BC34A;">Saber</span> <span style="color: #4CAF50;">más</span></div>
                        </a>
                    </div>
                </div>
                <div class="post-thumbnail">
                    <div class="thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'post-thumb' ); } ?>
                        </a>
                    </div>
                </div>
            </article>
            <hr style="height: 1px; width: 80%; margin: 2em auto; background-color: rgba(0,0,0,0.15); border: none;">

            <!-- post -->

            <div class="nav-previous flexie row major-center">
                <div class="flexie green minor-center"><?php next_posts_link( 'Anteriores' ); ?></div>
            </div>
            <div class="nav-next flexie row major-center">
                <div class="flexie green minor-center"><?php previous_posts_link( 'Siguientes' ); ?></div>
            </div>
      


        </div>
             
            <?php endwhile; ?>
             
            <?php else : ?>
             
            <?php get_template_part( 'no-results', 'archive' ); ?>
             
            <?php endif; ?>


        </div>


<?php get_footer(); ?>
