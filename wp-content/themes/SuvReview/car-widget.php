<?php
/**
 * Plugin Name: A simple Widget
 * Description: A widget that displays authors name.
 * Version: 0.1
 * Author: Bilal Shaheen
 * Author URI: http://gearaffiti.com/about
 */


add_action('widgets_init', 'my_widget');


function my_widget()
{
	register_widget('MY_Widget');
}

class MY_Widget extends WP_Widget
{

	function MY_Widget()
	{
		$widget_ops = array('classname' => 'example', 'description' => __('Виджет отображает фильтры для автомобилей', 'example'));

		$control_ops = array('width' => 300, 'height' => 350, 'id_base' => 'example-widget');

		$this->WP_Widget('example-widget', __('Фильтр марок автомобилей', 'example'), $widget_ops, $control_ops);
	}

	function widget($args, $instance)
	{
		extract($args);

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title']);


		echo $before_widget;

		// Display the widget title 
		if ($title)
			echo $before_title . $title . $after_title;

		$cats = get_categories(array('parent' => 3766, 'hide_empty' => 0));

		?>
		<?php //wp_enqueue_script("jquery"); ?>
		<script type="text/javascript">
			jQuery(document).ready(function () {
				jQuery('#type_select select').live('change', function () {
					var id = jQuery(this).val()
					jQuery.ajax({
						url: '/ajax.php?action=show_cat&id=' + id,
						success: function (d) {
							jQuery('#customer_select').html(d);
							jQuery('#model_select, #engine_select').html('');
						}
					})
				});

				jQuery('#customer_select select').live('change', function () {
					var id = jQuery(this).val()
					jQuery.ajax({
						url: '/ajax.php?action=show_cat&id=' + id,
						success: function (d) {
							jQuery('#model_select').html(d);
							jQuery('#engine_select').html('');
						}
					})
				});

				jQuery('#model_select select').live('change', function () {
					var id = jQuery(this).val()
					jQuery.ajax({
						url: '/ajax.php?action=show_posts&id=' + id,
						success: function (d) {
							jQuery('#engine_select').html(d);
						}
					})
				});
				jQuery('#engine_select select').live('change', function () {
					var id = jQuery(this).val()
					window.location = id;
				});
			});
		</script>
		<div id="type_select">
			<select class="car_select" name="car_type" id="car_type">
				<option value="0" selected="selected" disabled="disabled">Выберите тип</option>
				<?php
				foreach ($cats as $cat) {
					?>
					<option value="<?php echo $cat->term_id ?>"><?php echo $cat->name ?></option>
				<?php
				}
				?></select>
		</div>
		<div id="customer_select"></div>
		<div id="model_select"></div>
		<div id="engine_select"></div>
		<?php

		echo $after_widget;
	}

	//Update the widget 

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags($new_instance['title']);

		return $instance;
	}


	function form($instance)
	{

		//Set up some default widget settings.
		$defaults = array('title' => __('Example', 'example'), 'name' => __('Bilal Shaheen', 'example'), 'show_info' => true);
		$instance = wp_parse_args((array)$instance, $defaults); ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"
				   value="<?php echo $instance['title']; ?>" style="width:100%;"/>
		</p>
	<?php
	}
}

?>