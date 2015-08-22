<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="full-container">
		<div class="entry-content">
			<div id="panel-1"class="panel-class">
					 
		<?php
		// Start the loop.
				while ( have_posts() ) : the_post();?>
					<div class="panel-grid-2">
						
						<div class="container">
							<div class="content-container">
							<div class="page-title">
							<h2><?php the_title();?></h2>
							</div>
								<div class="page-content">
								<?php the_content();?></div>
							
							<?php query_posts(array('post_type'=>'schools', 'showposts' => -1,'order'=>'desc')); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<div class="post-container">
								<div class="post-image-container">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('school-thumb'); ?></a>
								</div>
								 
								<div class="post-content-container">
								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<?php echo wp_trim_words( get_the_content(), 60, '...' );?>
								<a href="<?php the_permalink();?>"><span>Read More</span></a>
								</div>
							</div>
							<?php endwhile; endif; wp_reset_query();?>
							</div>
							
							<div class="rightside">
							<?php dynamic_sidebar('degrees-link');?>
							</div>
						</div>
					</div>
		<?php endwhile;?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
