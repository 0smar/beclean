<?php get_header(); ?>

<div class="main-container">
	<div class="intro">
		<span class="welcome">¡Bienvenido!</span>
		<?php echo do_shortcode('[metaslider id=137]'); ?>
	</div>
</div>
<div class="separator" style="height: 10px;"></div>
<div class="content">
	<div class="main-container">
		<div class="brief">
			<div class="phrase">
				<div class="container" id="gradient">
					
				</div>
				<span>- Be Clean By ANutricional</span>
			</div>
			<div class="beclean">
				<h2>¿Qué es ser Clean?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque sapiente inventore praesentium atque totam, repudiandae earum expedita perspiciatis asperiores. Aliquam assumenda unde ducimus quaerat nihil aut at quasi vero in!</p>
			</div>
		</div>
		<span class="posts-header">Lo más Reciente</span>
		<div class="separator" style="height: 5px; margin-top: 0;"></div>
		<div class="post-area">
			

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
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
			<?php endwhile; ?>
			<!-- post navigation -->
			<div class="nav-previous flexie row major-center">
				<div class="flexie green minor-center"><?php next_posts_link( 'Anteriores' ); ?></div>
			</div>
			<div class="nav-next flexie row major-center">
				<div class="flexie green minor-center"><?php previous_posts_link( 'Siguientes' ); ?></div>
			</div>
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>


		</div>
		<!-- ?php get_sidebar( 'Primary' ); ?>-->
	</div>
	</div>	
	</div>

<?php get_footer(); ?>