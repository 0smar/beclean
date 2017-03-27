<?php get_header(); ?>

<div class="main-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article class="post flexie l-12 col">
				<div class="post-header flexie l-12 col">
					<div class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div>
					<div class="post-data"><?php the_date(); ?> por <?php the_author(); ?></div>
				</div>
				<hr>
				<div class="post-content row ">
					<p class="text"><?php the_content(); ?></p>
				</div>
				<div class="post-button">
            		<a href=" <?php echo get_edit_post_link( $id, $context ); ?>"><div class="post-link red button-shadow">Editar</div></a>
            	</div>
			</article>
			<!-- post -->
			<?php endwhile; ?>

			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
</div>

<?php get_footer(); ?>