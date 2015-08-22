<?php
/**
 * Template Name: Full Width Template for thanks, No Sidebar
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
<?php
		 $course = $_POST["interest"];
		 $var = explode('|',$course,2);
		 $courseID = $var[0];
		 $courseName = $var[1];
 		 $name1 = $_POST["firstname"];
		 $name2 = $_POST["lastname"];
		 $uaddress = $_POST["address"];
		 $ucity = $_POST["city"];
		 $ustate = $_POST["state"];
		 $uzip = $_POST["zip"];
		 $uemail = $_POST["email"];
		 $uphone = $_POST["phone1"];
		 $umethod = $_POST["methodofstudy"];
		 $ugradyear = $_POST["gradyear"];
		 $educationlevel = $_POST["edulevel"];
	     $ustartdate = $_POST["startdate"];
		// global $wpdb;
		// $edutable = $wpdb->prefix."edutable";
		// $sql = "INSERT INTO $edutable (userID, fname, lname, address, city, state, zipcode, email, phonenumber, course, edulevel, studymethod, passingyear, startschool) VALUES ('','$name1', '$name2', '$uaddress', '$ucity','$ustate','$uzip','$uemail','$uphone','$courseName','$educationlevel','$umethod','$ugradyear','$ustartdate')";
		 
		 
		 
?> 
<div class="full-container">
		<div class="entry-content">
			<div id="panel-1"class="panel-class">
				
           <?php
$args = array(
'post_type' => 'schools',
'tax_query' => array(
    array(
    'taxonomy' => 'study-area',
    'field' => 'id',
    'terms' => $courseID
     )
  )
);
$query = new WP_Query( $args ); ?>
<?php
$arg = array(
'post_type' => 'degrees',
'tax_query' => array(
    array(
    'taxonomy' => 'study-area',
    'field' => 'id',
    'terms' => $courseID
     )
  )
);
$querys = new WP_Query( $arg ); ?>
       <?php if($wpdb->query($sql)) { ?>
	   <div class="page-title">
									<h2>Thanks to contact us</h2>
									</div>
							<?php }?>   
		
		
		<?php $count= 0; // Start the loop.?>
			
					
					<div class="panel-grid-2">
						<div class="container">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<?php 	if (have_posts()) {
					while( $query->have_posts() ) : $query->the_post();?>
					<?php $count++;?>
						
						<div class="panel panel-default">
						 <div class="panel-heading" role="tab" id="heading<?php echo $count;?>">
							<div class="cat-name">
							<h2 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>" aria-expanded="<?php if($count==1){ echo "true";}else{echo"false";}?>" aria-controls="collapse<?php echo $count;?>"><?php the_title(); ?></a></h2>
								</div></div>
								 <div id="collapse<?php echo $count;?>" class="panel-collapse collapse <?php if($count==1){ echo "in";}?>" role="tabpanel" aria-labelledby="heading<?php echo $count;?>">
								 <div class="panel-body">
								<div class="page-content"><div class="page-thanks-img">
								<?php the_post_thumbnail('school-thumb'); ?>
								</div>
									<?php echo get_field('school_description');?>
									<?php if (have_posts()) {?>
		<?php while( $querys->have_posts() ) : $querys->the_post();?>
		<div class="page-feature-content"><h2><?php the_title(); ?></h2></div>
		
		<?php if( have_rows('regard_degree') ):  ?>
	<div class="repeater_loop1">
	<select>
	<option>Choose Degree...</option>
	<?php while( have_rows('regard_degree') ): the_row(); ?>
		
			<option><?php the_sub_field('degree_name');?></option>
		<?php endwhile; ?>
		</select>
	</div>
<?php endif; ?>
		

		<?php endwhile;?>
				<?php } ?>
				</div></div></div></div>
								
								
									<?php endwhile;?>
		<?php } ?></div>
						</div>
	
		
					</div>
			</div>
		</div>
	</div></div></div>
<?php get_footer(); ?>
