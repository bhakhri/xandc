<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="full-container">
		<div class="entry-content">
			<div id="panel-1"class="panel-class">
				<div class="container">
					<div class="content-container">
<?php if(is_tax( 'study-area')){ ?>
					<?php // vars
						$queried_object = get_queried_object(); 
						$taxonomy = $queried_object->taxonomy;
						$term_id = $queried_object->term_id;  
						$catcontent = get_field('category_content', $queried_object);?>							
						<div class="cat-name">
							<h2><?php echo $current_category = single_cat_title("", false); ?></h2>
						</div>
						<div class="page-content">
							<?php echo $catcontent;?>
						</div>
						<div class="page-title">
							<h2>Schools with <?php echo $current_category = single_cat_title("", false); ?> degrees<?php //the_archive_description();?></h2>
						</div>
							<?php // Start the Loop.
								$args = array('post_type' => 'schools','tax_query' => array(
								array(
										'taxonomy' => 'study-area',
										'field' => 'id',
										'terms' => $term_id
									 )
								));
						$query = new WP_Query( $args ); ?>
				<?php if ( have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post();?>
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
				<?php endwhile;endif;  wp_reset_query();?>
<?php } else { ?>
						<div class="cat-name">
							<h2><?php echo $current_category = single_cat_title("", false); ?></h2>
						</div>
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post();?>
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
					<?php endwhile;endif;  wp_reset_query();?>
<?php } ?>
					</div>
						<div class="rightside">
							<?php dynamic_sidebar('degrees-link');?>
							<?php dynamic_sidebar('schools-link');?>
						</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
