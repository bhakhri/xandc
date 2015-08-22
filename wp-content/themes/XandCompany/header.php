<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/formscript.js"></script>
<script>
$(document).ready(function(){
	$("#send-request").click(function(){
    if ($.trim($("#selectdegree").val()) === "") {
		$("#selectdegree").addClass('errornotice');
		$('#selectdegree').focus(function(){
   return $("#selectdegree").removeClass('errornotice');
});
        return false;
    }
}); 
});
</script>
<?php wp_head(); ?>
</head>
<body class="custom-background">
<div id="page-wrapper">
	<header id="masthead" class="site-header" role="banner">
		<div class="hgroup full-container">
			<a class="logo" rel="home" title="Online Edu Search" href="<?php echo site_url();?>">
				<img class="logo-no-height-constrain" width="300" height="54"  alt="Online Edu Search Logo" src="<?php echo get_template_directory_uri(); ?>/images/onlineedusearch.png">
			</a>
			
				<?php dynamic_sidebar('social-header');?>
			
		</div>
		
		<nav class="main-navigation" role="navigation">
			<?php
			$defaults = array('theme_location'  => 'primary','menu'=> 'header-menu','items_wrap'=>'<ul id="menu-home_menu" class="menu">%3$s</ul>');
			wp_nav_menu( $defaults );
			?>
				
		</nav>
		
	</header>
	<div id="main" class="site-main">