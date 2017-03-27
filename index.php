<?php get_header(); ?>

<div class="content">
	<div class="main-container">
		<div class="spacer-box"></div>
		<div class="brief">
			<div class="phrase">
				<div class="container" id="gradient">
					<?php $post_id = 164; // assign post id
		                $queried_post = get_page($post_id);
		                if(is_home()) {  ?>
		                
		                	<?php echo $queried_post->post_content;  ?>
		                	
		            <?php  } ?>
				</div>
				<span>- Be Clean By ANutricional</span>
			</div>
			<div class="beclean">
				<h2>¿Qué es ser Clean?</h2>
				<p>
					<?php $post_id = 162; // assign post id
		                $queried_post = get_page($post_id);
		                if(is_home()) {  ?>
		                
		                	<?php echo $queried_post->post_content;  ?>
		                	
		            <?php  } ?>
				</p>
			</div>
		</div>
		<div class="cats_section">
			<a href="<?php $nutribooks = get_cat_ID( 'Hogar' ); echo get_category_link( $nutribooks ) ?>" class="flexie nutri-link space-top gray redapple shadow button-shadow">
				Hogar
			</a>
			<a href="<?php $nutrivlogs = get_cat_ID( 'Belleza' ); echo get_category_link( $nutrivlogs ) ?>" class="flexie nutri-link gray greenapple space-top shadow button-shadow">
				Belleza
			</a>
			<a href="<?php $nutriprogramas = get_cat_ID( 'Tips' ); echo get_category_link( $nutriprogramas ) ?>" class="flexie nutri-link gray redapple space-top shadow button-shadow">
				Tips
			</a>
			<a href="<?php $nutriretos = get_cat_ID( 'Organizacion' ); echo get_category_link( $nutriretos ) ?>" class="flexie nutri-link gray greenapple space-top shadow button-shadow">
				Organización
			</a>
		</div>
		<div class="newsletter">
			<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-4080" method="post" data-id="4080" data-name="">
				<div class="description">Suscríbete a mi Clean Team y recibe noticias y promociones.</div>
				<div class="mc4wp-form-fields form">
			    	<input type="text" name="FNAME" placeholder="Nombre" required=""/>

					<input type="email" name="EMAIL" placeholder="Correo Electrónico" required=""/>
					<input type="submit" value="Suscribirse" class="minor-center green button-shadow" />
				</div>
				
			<div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"/></div>
			<input type="hidden" name="_mc4wp_timestamp" value="1460660581"/><input type="hidden" name="_mc4wp_form_id" value="4080"/><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"/></form>

			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
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