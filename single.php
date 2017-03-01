<?php get_header(); ?>
<div class="flexie main-container major-center col">

<div class="main-content flexie major-between minor-start">

		<div class="content-area flexie gray col major-between shadow">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article class="post flexie l-12 col">
				<div class="post-header flexie l-12 col">
					<div class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div>
					<div class="post-data"><?php the_date(); ?> por <?php the_author(); ?> en <?php the_category(', '); ?></div>
				</div>
				<hr>
				<div class="post-content row ">
					<p class="text"><?php the_content(); ?></p>
				</div>
				<?php edit_post_link( 'Editar', '<a href=" <?php echo get_edit_post_link( $id, $context ); ?>"><div class="post-link red button-shadow">', '</div></a>', $id ); ?> 
			</article>
			<!-- post -->
			<?php endwhile; ?>

			<?php else: ?>
			<!-- no posts found -->
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