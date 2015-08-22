<?php
class ShowBlogsLinks extends WP_Widget
{
    function ShowBlogsLinks(){
		$widget_ops = array('description' => 'Blog Area');
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false,$name='Show Blog',$widget_ops,$control_ops);
    }
  /* Displays the Widget in the front-end */
    function widget($args, $instance){
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$show_blogs = empty($instance['show_blogs ']) ? '' : $instance['show_blogs '];
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
<?php query_posts(array('post_type'=>'blog', 'showposts' => $show_blogs,'order'=>'desc')); ?>
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
		$instance['show_blogs'] = $new_instance['show_blogs'];
		//$instance['list_order'] = $new_instance['list_order'];
		//$instance['twitter_url'] = $new_instance['twitter_url'];
		return $instance;
	}
  /*Creates the form for the widget in the back-end. */
    function form($instance){
		//Defaults
		//$rssfeed_url = site_url('feed');
		$instance = wp_parse_args( (array) $instance, array( 'title'=>'','show_blogs'=>'-1 For all blog','list_order'=>'asc OR desc') );
		$title = htmlspecialchars($instance['title']);
		//$desc = $instance['desc'];
		$show_blogs = $instance['show_blogs'];
		//$list_order = $instance['list_order'];
		//$twitter_url = $instance['twitter_url'];
		# Title
		echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '" /></p>';
	
	echo '<p><label for="' . $this->get_field_id('show_blogs') . '">' . 'Show Number of Blog:' . '</label><input class="widefat" id="' . $this->get_field_id('show_blogs') . '" name="' . $this->get_field_name('show_blogs') . '" type="text" value="' . esc_attr($show_blogs) . '" /></p>';
	//echo '<p><label for="' . $this->get_field_id('list_order') . '">' . 'List Order:' . '</label><input class="widefat" id="' . $this->get_field_id('list_order') . '" name="' . $this->get_field_name('list_order') . '" type="text" value="' . esc_attr($list_order) . '" /></p>';
	
	//echo '<p><label for="' . $this->get_field_id('twitter_url') . '">' . 'Twitter URL:' . '</label><input class="widefat" id="' . $this->get_field_id('twitter_url') . '" name="' . $this->get_field_name('twitter_url') . '" type="text" value="' . esc_attr($twitter_url) . '" /></p>';
			
		//echo '<p><label for="' . $this->get_field_id('pin_url') . '">' . 'Pinterest URL:' . '</label><input class="widefat" id="' . $this->get_field_id('pin_url') . '" name="' . $this->get_field_name('pin_url') . '" type="text" value="' . esc_attr($pin_url) . '" /></p>';
		
		//echo '<p><label for="' . $this->get_field_id('hz_url') . '">' . 'Houzz URL:' . '</label><input class="widefat" id="' . $this->get_field_id('hz_url') . '" name="' . $this->get_field_name('hz_url') . '" type="text" value="' . esc_attr($hz_url) . '" /></p>';
	
		?>
<?php
	}
}
function ShowBlogsLinksInit() {
  register_widget('ShowBlogsLinks');
}
add_action('widgets_init', 'ShowBlogsLinksInit');
?>
