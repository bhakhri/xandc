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
		// Start the loop.
				while ( have_posts() ) : the_post();?>
					<div class="panel-grid-2">
						<div class="container">
							<div class="content-container">
								<div class="page-title">
									<h2><?php echo get_the_title($courseID);?></h2>
								</div>
								<div class="page-content">
									<?php // echo wp_get_post_parent_id( $courseID ); ?> 
									<pre>
<?php print_r($car = get_post_ancestors( $courseID )); ?></pre>


								</div>
								
							
							<>
						</div>
		<?php endwhile;?>
					</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
