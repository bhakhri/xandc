<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="full-container">
		<div class="entry-content">
			<div id="panel-1"class="panel-class">
				<div class="panel-grid-2">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
		
						<div class="container">
							<div class="content-container">
								<!--<div class="post-image-container">
							<?php //if ( has_post_thumbnail() ) 
								//	{
								//		the_post_thumbnail('school-thumb');
								//	}	?>							
								</div>-->
								<div class="page-title">
									<h2><?php the_title();?></h2>
								</div>
								<div class="page-content">
									<?php the_content();?>
								</div>
								<div class="page-feature">
									<div class="page-title">
										<h2>Areas of Study at <?php the_title();?></h2>
									</div>
								<?php if(get_field('courses')): ?>
								
								 <?php while(has_sub_field('courses')): ?>
									<div class="page-feature-content">
											
										<div class="page-content">
										<div class="page-feature-image">
											<img src="<?php the_sub_field('course_image'); ?>" alt="" width="100px" height="90px" />
											
										</div>
										
										<h2><?php the_sub_field('course_title');?></h2>
										<?php the_sub_field('course_content');?>
										
										</div>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
							
								</div>
							</div>
							<div class="rightside">
							<?php dynamic_sidebar('degrees-link');?>
							<?php dynamic_sidebar('schools-link');?>
							</div>
						</div>
			
		
	<?php	endwhile;
		?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
