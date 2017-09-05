<?php get_header(); ?>
<!--
/*
* Template Name: Homepage
*/ 
-->
<?php $shortname = "unit_theme"; ?>
<div id="content">
	<div class="container_home">

<section>
	<h1 class="socialHeader">[Social Links]</h1>
</section>

<section class="social">
	
<?php 
$args = [
'menu' => 'section_links',
'menu_class' => 'section-menu'
];

wp_nav_menu($args);
 ?>



</section>

<section>
	<h1 class="postSectionHeader">[RECENT POSTS]</h1>
</section>

		<?php
		$category_ID = get_category_id('blog');
		$args = array(
			 'post_type' => 'post',
			 'posts_per_page' => 6,
			 'post__not_in' => $slider_arr,
			 'order' => 'DESC',
			 'cat' => '-' . $category_ID
			 );

		query_posts($args);
		$x = 0;
		while (have_posts()) : the_post(); ?>                        					
			<div class="home_box">
				<div class="home_box_media">
					<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
						<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
						<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=03b3fc" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } else { ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('ut-home-image'); ?></a>
					
						
					<?php } ?>			
				</div> <!-- //home_box_media -->
			    <div class="home_box_content">						
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    </div>
				
			</div> <!-- //home_box -->		
			<?php if($x == 1) { echo '<div class="clear"></div>'; $x = -1; } ?>
		<?php $x++; ?>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<div class="clear"></div>
		
		
	</div> <!-- //container -->
</div> <!-- //content -->
<?php get_footer(); ?> 	