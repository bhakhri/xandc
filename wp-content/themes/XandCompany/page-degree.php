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
									<?php the_content();?>
								</div>
							<?php	$taxonomy = 'study-area'; ?>
						
  <?php $terms = get_terms( $taxonomy, '' ); ?>
 <div class="cat-feature">
 <?php  if ($terms) {
    foreach($terms as $term) { ?>
	<div class="cat-content">
	
        <h2><?php  echo $term->name;?></h2>
		<p><?php echo $term->description; ?></p>
		
		<a href="<?php echo get_term_link($term, $taxonomy);?>">
<button class="btn-grey">More Info</button>
</a>
</div>
   <?php }
 }
?>
</div>
									
							</div>
							<div class="rightside">
								<?php dynamic_sidebar('degrees-link');?>
							</div>
						</div>
		<?php endwhile;?>
					</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
