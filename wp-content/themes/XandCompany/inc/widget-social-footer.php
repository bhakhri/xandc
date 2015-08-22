<?php
class ShowLinksFooter extends WP_Widget
{
    function ShowLinksFooter(){
		$widget_ops = array('description' => 'Social Footer Links');
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false,$name='Social Footer Links',$widget_ops,$control_ops);
    }
  /* Displays the Widget in the front-end */
    function widget($args, $instance){
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$facebook_url = empty($instance['facebook_url']) ? '' : $instance['facebook_url'];
		$googleplus_url = empty($instance['googleplus_url']) ? '' : $instance['googleplus_url'];
		$twitter_url = empty($instance['twitter_url']) ? '' : $instance['twitter_url'];
	
		
		echo $before_widget;
?>
<!--<h3 class="sec-title"><?php //echo $before_title . $title . $after_title; ?></h3>-->


       <ul class="bottom-social-icon">
				<li><a href="<?php echo $facebook_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-round.png" alt="logo"></a></li>
				<li><a href="<?php echo $googleplus_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.png" alt="logo"></a></li>
				<li><a href="<?php echo $twitter_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="logo"></a></li>
			</ul>
<?php
		echo $after_widget;
	}
  /*Saves the settings. */
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = stripslashes($new_instance['title']);
		$instance['facebook_url'] = $new_instance['facebook_url'];
		$instance['googleplus_url'] = $new_instance['googleplus_url'];
		$instance['twitter_url'] = $new_instance['twitter_url'];
		return $instance;
	}
  /*Creates the form for the widget in the back-end. */
    function form($instance){
		//Defaults
		//$rssfeed_url = site_url('feed');
		$instance = wp_parse_args( (array) $instance, array( 'title'=>'Connect','facebook_url'=>'','twitter_url'=>'','googleplus_url'=>'') );
		$title = htmlspecialchars($instance['title']);
		//$desc = $instance['desc'];
		$facebook_url = $instance['facebook_url'];
		$googleplus_url = $instance['googleplus_url'];
		$twitter_url = $instance['twitter_url'];
		# Title
		echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '" /></p>';
	
	echo '<p><label for="' . $this->get_field_id('facebook_url') . '">' . 'Facebook URL:' . '</label><input class="widefat" id="' . $this->get_field_id('facebook_url') . '" name="' . $this->get_field_name('facebook_url') . '" type="text" value="' . esc_attr($facebook_url) . '" /></p>';
	echo '<p><label for="' . $this->get_field_id('googleplus_url') . '">' . 'GooglePlus URL:' . '</label><input class="widefat" id="' . $this->get_field_id('googleplus_url') . '" name="' . $this->get_field_name('googleplus_url') . '" type="text" value="' . esc_attr($googleplus_url) . '" /></p>';
	
	echo '<p><label for="' . $this->get_field_id('twitter_url') . '">' . 'Twitter URL:' . '</label><input class="widefat" id="' . $this->get_field_id('twitter_url') . '" name="' . $this->get_field_name('twitter_url') . '" type="text" value="' . esc_attr($twitter_url) . '" /></p>';
			
		//echo '<p><label for="' . $this->get_field_id('pin_url') . '">' . 'Pinterest URL:' . '</label><input class="widefat" id="' . $this->get_field_id('pin_url') . '" name="' . $this->get_field_name('pin_url') . '" type="text" value="' . esc_attr($pin_url) . '" /></p>';
		
		//echo '<p><label for="' . $this->get_field_id('hz_url') . '">' . 'Houzz URL:' . '</label><input class="widefat" id="' . $this->get_field_id('hz_url') . '" name="' . $this->get_field_name('hz_url') . '" type="text" value="' . esc_attr($hz_url) . '" /></p>';
	
		?>
<?php
	}
}
function ShowLinksFooterInit() {
  register_widget('ShowLinksFooter');
}
add_action('widgets_init', 'ShowLinksFooterInit');
?>
