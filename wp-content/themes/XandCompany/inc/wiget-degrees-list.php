<?php
class ShowDegreeLinks extends WP_Widget
{
    function ShowDegreeLinks(){
		$widget_ops = array('description' => 'Degree Links');
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false,$name='Degree Links',$widget_ops,$control_ops);
    }
  /* Displays the Widget in the front-end */
    function widget($args, $instance){
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
?>

<div class="right-box">
								<div class="right-box-title">
									<h2><?php echo $title; ?></h2>
								</div>
								<div class="right-box-content">
								<?php	$orderby = 'name'; $taxonomy = 'study-area'; $tittle = '';
										$args = array('orderby' => $orderby,'taxonomy' => $taxonomy,'title_li' => $tittle);
								?>
									<ul>
										<?php wp_list_categories($args);?>
									</ul>
								</div>
								</div>
<?php
		//echo $after_widget;
	}
  /*Saves the settings. */
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		return $instance;
	}
  /*Creates the form for the widget in the back-end. */
   function form($instance){
		$instance = wp_parse_args( (array) $instance, array( 'title'=>'') );
		$title = $instance['title'];
	
	echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '" /></p>';
	
	}
}
function ShowDegreeLinksInit() {
  register_widget('ShowDegreeLinks');
}
add_action('widgets_init', 'ShowDegreeLinksInit');
?>
