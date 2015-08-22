
<?php
 if(isset($_POST['sendmail'])) {
	 
	 
 $degree = $_POST['mydegree'];
 $schoolName = $_POST['schoolname'];
 $schoolEmailID = $_POST['schoolemailid'];
 $schoolChatID = $_POST['schoolchatid'];
 $schoolphoneno = $_POST['schoolnumber'];
 $schoolEmailcontent = $_POST['schoolEcontent'];
 $schoolElogo = $_POST['schoolLogo'];
 $fname = $_POST['myfname'];
 $lname = $_POST['mylname'];
 $address = $_POST['myaddress'];
 $city = $_POST['mycity'];
 $state = $_POST['mystate'];
 $zip = $_POST['myzip'];
 $phone = $_POST['myphone'];
 $studyarea = $_POST['mystudyarea'];
 $edulevel = $_POST['myedulevel'];
 $passingyear = $_POST['mypassingyr'];
 $startschool = $_POST['mystartdate'];
 $studymethod = $_POST['mymethod'];
 $email = $_POST['mymail'];
 global $wpdb;
	$edutable = $wpdb->prefix."edutable";
	$sql = "INSERT INTO $edutable (userID, fname, lname, address, city, state, zipcode, email, phonenumber, studyarea,degree, edulevel, studymethod, passingyear, startschool,school) VALUES ('','$fname', '$lname', '$address', '$city','$state','$zip','$email','$phone','$studyarea','$degree','$edulevel','$studymethod','$passingyear','$startschool','$schoolName')";
	
$to      = $email;
$subject = "Thankyou for Showing your Interest in ".$schoolName;
$message = '<html>
<title></title>
<head></head>
<body>
<style>
body {
  color: #666666;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 13px;
  line-height: 1.7em;
}
.email-content {
  padding: 0 10px;
}
.email-content > span {
  font-weight: bold;
}
.container {
  background: #fcfafa none repeat scroll 0 0;
  border-color: #a6a6a6;
  border-image: none;
  border-radius: 5px;
  border-style: solid;
  border-width: 20px 1px;
  box-shadow: 1px 0 3px #a6a6a6 inset;
  padding: 15px;
  position: absolute;
  width: 50%;
  margin: 0 auto;
  max-width: 1080px;
  overflow-x: visible;
 
}
.emailheader {
  text-align: center;
}
.emailheader > h2 {
  color: #FF6600;
  font-family: calibri;
  font-size: 20px;
  font-style: italic;
  text-decoration: underline;
}
.emailsecheader {
  display: block;
  height: 130px;
  position: relative;
  width: 100%;
}
.emailsecheader > h2 {
  box-shadow: 2px 11px 10px #a6a6a6;
  color: #3f5d68;
  float: right;
  font-family: calibri;
  font-size: 25px;
  margin: 0 35px 0 0;
  padding: 0 0 10px;
  text-align: center;
  width: 50%;
}
.schlogo > img {
  box-shadow: 4px 10px 10px #a6a6a6;
}
.schlogo {
  float: left;
  padding: 0 12px 6px 5px;
  width: 250px;
}
.emailfooter {
  box-shadow: 0 0 20px #a6a6a6;
}
.emailfooter > h2 {
  color: #3f5d68;
  font-family: calibri;
}
.emailfooter {
  box-shadow: 0 0 20px #a6a6a6;
  padding: 1px 20px;
}
.emailfooter a{
color: #45c940;
}
.call-us {
  color: #ff6600;
  font-family: calibri;
  font-size: 15px;
  font-weight: bold;
  text-transform: uppercase;
}
</style>

<div class="container">
	<div class="emailsecheader">
		<div class="schlogo">
			<img src="'.$schoolElogo.'" atl="schlogo" width="214px" height="97px" />
		</div>
		<div class="emailheader">
		<h2>Thankyou For Requesting information</h2>
	</div>
		<h2>'.$schoolName.'</h2>
	</div>
	<div class="content-container">
		<div class="email-content">
			<span>Hello '.$fname.'</span>
			'.$schoolEmailcontent.'
		</div>
	</div>
	<div class="emailfooter">
		<h2>Contact us </h2>
		<p>Enrollment Representatives are available to assist you. <a target="blank" href="'.$schoolChatID.'">Chat Live</a> </p>
		
		<p><span class="call-us">call us:</span> '.$schoolphoneno.'</p>
	</div>
	
</div>
</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$schoolEmailID . "\r\n";


mail($to,$subject,$message,$headers);
 }
?>
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
$ustudyarea = $var[1];
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

?> 
		<div class="full-container">
			<div class="entry-content">
				<div id="panel-1"class="panel-class">
							<?php $args = array('post_type' => 'schools','tax_query' => array(
											array('taxonomy' => 'study-area','field' => 'id','terms' => $courseID)));
									$query = new WP_Query( $args ); ?>
							<?php $arg = array('post_type' => 'degrees','tax_query' => array(
								array('taxonomy' => 'study-area','field' => 'id','terms' => $courseID)));
									$querys = new WP_Query( $arg ); ?>
								<?php if($wpdb->query($sql)) { ?>
										<div class="page-title">
											<h2>Thanks to contact us</h2>
										</div>
										<div class="container">
											<div class="page-content">
												<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
											</div>
										</div>
								<?php }?>   
						<?php $count= 0; // Start the loop.?>
							
									
					<div class="panel-grid-2">
						<div class="container">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <?php if (have_posts()) {
										while( $query->have_posts() ) : $query->the_post();?>
											<?php $count++;?>
											<?php  $schoolid = get_the_ID();?>
											<?php $schooltitle = get_the_title($schoolid);?>
											<?php  $schoolemail = get_field("school_email_id");?>
											<?php  $schoolchatID = get_field("school_chat_id");?>
											<?php  $schoolphnumber = get_field("school_contact_no");?>
											<?php  $schoolemailcontent = get_field("email_content");?>
											<?php $schoolpic =  wp_get_attachment_image_src(get_post_thumbnail_id( $schoolID,'large' )); ?>
											<?php  $schoollogo = $schoolpic[0];?>
											
											
											<div class="panel panel-default">
																			<div class="panel-heading" role="tab" id="heading<?php echo $count;?>">
																				<div class="cat-name">
																					<h2 class="panel-title">
																					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>" aria-expanded="<?php if($count==1){ echo "true";}else{echo"false";}?>" aria-controls="collapse<?php echo $count;?>"><?php the_title(); ?></a></h2>
																				</div>
																			</div>
												<div id="collapse<?php echo $count;?>" class="panel-collapse collapse <?php if($count==1){ echo "in";}?>" role="tabpanel" aria-labelledby="heading<?php echo $count;?>">
													<div class="panel-body">
														<div class="page-content">
															<div class="page-thanks-img">
																<?php the_post_thumbnail('school-thumb'); ?>
															</div>
															<?php echo get_field('school_description');?>
															<?php if (have_posts()) {?>
																<?php while( $querys->have_posts() ) : $querys->the_post();?>
																					<div class="page-feature-content">
																						<h2><?php the_title(); ?></h2>
																					</div>
																		<form id="form2" method="POST" name="myform">
																		<?php if( have_rows('regard_degree') ):  ?>
																			<select id ="selectdegree" name="mydegree">
																				<option selected="" value="" >Choose Degree...</option>
																				<?php while( have_rows('regard_degree') ): the_row(); ?>
																				<option value="<?php the_sub_field('degree_name');?>"><?php the_sub_field('degree_name');?></option>
																				<?php endwhile; ?>
																			</select>
																		<?php endif; ?>
																		<input type="hidden" value="<?php echo $schooltitle; ?>" name="schoolname">
																		<input type="hidden" value="<?php echo $schoolemail; ?>" name="schoolemailid">
																		<input type="hidden" value="<?php echo $schoolchatID; ?>" name="schoolchatid">
																		<input type="hidden" value="<?php echo $schoolphnumber; ?>" name="schoolnumber">
																		<input type="hidden" value="<?php echo $schoolemailcontent; ?>" name="schoolEcontent">
																		<input type="hidden" value="<?php echo $schoollogo; ?>" name="schoolLogo">
																		
																			<input type="hidden" value="<?php echo $uemail; ?>" name="mymail">
																			<input type="hidden" value="<?php echo $name1; ?>" name="myfname">
																			<input type="hidden" value="<?php echo $name2; ?>" name="mylname">
																			<input type="hidden" value="<?php echo $uaddress; ?>" name="myaddress">
																			<input type="hidden" value="<?php echo $ucity; ?>" name="mycity">
																			<input type="hidden" value="<?php echo $ustate; ?>" name="mystate">
																			<input type="hidden" value="<?php echo $uzip; ?>" name="myzip">
																			<input type="hidden" value="<?php echo $uphone; ?>" name="myphone">
																			<input type="hidden" value="<?php echo $ustudyarea; ?>" name="mystudyarea">
																			<input type="hidden" value="<?php echo $educationlevel; ?>" name="myedulevel">
																			<input type="hidden" value="<?php echo $ugradyear; ?>" name="mypassingyr">
																			<input type="hidden" value="<?php echo $ustartdate; ?>" name="mystartdate">
																			<input type="hidden" value="<?php echo $umethod; ?>" name="mymethod">
																			<input id="send-request" class="form-request" type="submit" value="Send Request" name="sendmail"/>
																		</form>
																<?php endwhile;?>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
									<?php endwhile;?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
