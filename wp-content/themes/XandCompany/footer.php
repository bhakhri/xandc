<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div>
	
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-widgets" class="full-container">
		<span>Copyright | ©2015 All Rights Reserved  | Online-Education-Search</span>
			<?php dynamic_sidebar('social-footer');?>
		</div>
	</footer>
	<a id="scroll-to-top" class="displayed" title="Back To Top" href="#top">
<span class="vantage-icon-arrow-up"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-up-01.png"></span>
</a>
<?php wp_footer();?>
</body>
</html>
