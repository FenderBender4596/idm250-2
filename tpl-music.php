<?php
/*
	Template Name: Music
*/
?>
<?php get_header(); ?>		
<div id="content">
	<div class="container">
	
		<div id="single_cont">
		
			<div class="single_left">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<h1>Solo Music</h1>

					<?php
			        $args = array(
					'category_name' => 'Solo Music',
					'order' => 'DESC'
					);


			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="column">
				<?php the_post_thumbnail('thumbnail'); ?>
				<h3><?php the_title(); ?></h3>
				<p>
					<?php the_excerpt(); ?>
				</p>
			</div>
			<?php endwhile;
			}?>
					
					<div class="portfolio-images">
					
						<?php the_content(); ?>
						
					</div><!--//single_inside_content-->
					
					<br /><br />
					
					<?php //comments_template(); ?>							
				
				<?php endwhile; else: ?>
				
					<h3>Sorry, no posts matched your criteria.</h3>
				<?php endif; ?>                    																
			
			</div><!--//single_left-->
			
			
			
			<div class="clear"></div>
		
		</div><!--//single_cont-->
		
	</div><!--//container-->
</div><!--//content-->
<?php get_footer(); ?> 			