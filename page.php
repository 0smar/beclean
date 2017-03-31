<?php get_header(); ?>

<div class="main-container">
	<div class="post-container single">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<div class="post-header">
					<div class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div>
					<div class="post-date"><?php the_date(); ?> por <?php the_author(); ?> en <?php the_category(', '); ?></div>
					<div class="separator" style="height: 5px; margin-top: 0;"></div><br>
				</div>
				
				<div class="post-content">
					<p class="text"><?php the_content(); ?></p>
				</div>
				<?php 

				if ( ! is_admin() ) {
     				edit_post_link( 'Editar', '<a href=" <?php echo get_edit_post_link( $id, $context ); ?>"><div class="edit-button">', '</div></a>', $id );
				} else {
     			
					}
				?>
			<!-- post -->
			<?php endwhile; ?>

			<?php else: ?>
			No hay posts
		<?php endif; ?>

	</div>
	<hr>
	<br><br>
</div>

<?php get_footer(); ?>