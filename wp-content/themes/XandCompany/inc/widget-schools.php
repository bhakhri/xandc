<?php
class ShowSchoolsLinks extends WP_Widget
{
    function ShowSchoolsLinks(){
		$widget_ops = array('description' => 'School Links');
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false,$name='Schools List',$widget_ops,$control_ops);
    }
  /* Displays the Widget in the front-end */
    function widget($args, $instance){
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$show_schools = empty($instance['show_schools ']) ? '' : $instance['show_schools '];
		//$list_order = empty($instance['list_order']) ? '' : $instance['list_order'];
		//$twitter_url = empty($instance['twitter_url']) ? '' : $instance['twitter_url'];
	
	
		
		echo $before_widget;
?>
<!--<span class="contact-number"><?php //echo $before_title . $title . $after_title; ?></span>--->
<div class="right-box-title">
	<h2><?php echo $title; ?></h2>
</div>
<div class="right-box-content">
<ul>
<?php query_posts(array('post_type'=>'schools', 'showposts' => $show_schools,'order'=>'desc')); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
<?php endwhile; endif; wp_reset_query();?>
</ul>
</div>
<?php
		echo $after_widget;
	}
  /*Saves the settings. */
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = stripslashes($new_instance['title']);
		$instance['show_schools'] = $new_instance['show_schools'];
		//$instance['list_order'] = $new_instance['list_order'];
		//$instance['twitter_url'] = $new_instance['twitter_url'];
		return $instance;
	}
  /*Creates the form for the widget in the back-end. */
    function form($instance){
		//Defaults
		//$rssfeed_url = site_url('feed');
		$instance = wp_parse_args( (array) $instance, array( 'title'=>'','show_schools'=>'-1 For all schools','list_order'=>'asc OR desc') );
		$title = htmlspecialchars($instance['title']);
		//$desc = $instance['desc'];
		$show_schools = $instance['show_schools'];
		//$list_order = $instance['list_order'];
		//$twitter_url = $instance['twitter_url'];
		# Title
		echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '" /></p>';
	
	echo '<p><label for="' . $this->get_field_id('show_schools') . '">' . 'Show Number of Schools:' . '</label><input class="widefat" id="' . $this->get_field_id('show_schools') . '" name="' . $this->get_field_name('show_schools') . '" type="text" value="' . esc_attr($show_schools) . '" /></p>';
	//echo '<p><label for="' . $this->get_field_id('list_order') . '">' . 'List Order:' . '</label><input class="widefat" id="' . $this->get_field_id('list_order') . '" name="' . $this->get_field_name('list_order') . '" type="text" value="' . esc_attr($list_order) . '" /></p>';
	
	//echo '<p><label for="' . $this->get_field_id('twitter_url') . '">' . 'Twitter URL:' . '</label><input class="widefat" id="' . $this->get_field_id('twitter_url') . '" name="' . $this->get_field_name('twitter_url') . '" type="text" value="' . esc_attr($twitter_url) . '" /></p>';
			
		//echo '<p><label for="' . $this->get_field_id('pin_url') . '">' . 'Pinterest URL:' . '</label><input class="widefat" id="' . $this->get_field_id('pin_url') . '" name="' . $this->get_field_name('pin_url') . '" type="text" value="' . esc_attr($pin_url) . '" /></p>';
		
		//echo '<p><label for="' . $this->get_field_id('hz_url') . '">' . 'Houzz URL:' . '</label><input class="widefat" id="' . $this->get_field_id('hz_url') . '" name="' . $this->get_field_name('hz_url') . '" type="text" value="' . esc_attr($hz_url) . '" /></p>';
	
		?>
<?php
	}
}
function ShowSchoolsLinksInit() {
  register_widget('ShowSchoolsLinks');
}
add_action('widgets_init', 'ShowSchoolsLinksInit');
?>
