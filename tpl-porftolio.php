<?php
/*
	Template Name: Portfolio
*/
?>
<?php get_header(); ?>		
<div id="content">
	<div class="container">
	
		<div id="single_cont">
		
			<div class="single_left">
				<div class="single_inside_content">	

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<h1 class="pageSectionHeader">Graphic Design</h1>
					<br>
					<?php
			        $args = array(
					'category_name' => 'Graphic Design',
					'order' => 'DESC'
					);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="column">
	
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<?php endwhile; }?>

			        <h1 class="pageSectionHeader">UI/UX Design</h1>
					<br>
					<?php
			        $args = array(
					'category_name' => 'ui-ux design',
					'order' => 'DESC'
					);
				    $loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="column">
	
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<?php endwhile; }?>

			        <h1 class="pageSectionHeader">Photography</h1>
					<br>
					<?php
			        $args = array(
					'category_name' => 'photogaphy',
					'order' => 'DESC'
					);

					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="column">
	
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<?php endwhile; }?>
		
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