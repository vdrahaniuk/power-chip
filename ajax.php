<?php
require_once(dirname(__FILE__) . '/wp-load.php');
/**
 * Created by PhpStorm.
 * User: kolyan
 * Date: 28.02.14
 * Time: 13:54
 */
$pp = array(
	2 => 'Производитель',
	3 => 'Moдель',
	4 => 'Moщность двигателя',
);
$act = @$_GET['action'];
$id = @$_GET['id'];
$p = @$_GET['p'];
function show_cat($id, $pp, $p)
{
	$cats = get_categories(array('parent' => $id, 'hide_empty' => 0));
	?>
	<select class="car_select">
		<option value="0" selected="selected" disabled="disabled"><?php echo $pp[$p]; ?></option>
		<?php
		foreach ($cats as $cat) {
			?>
			<option value="<?php echo $cat->term_id ?>"><?php echo $cat->name ?></option>
		<?php
		}
		?></select>
<?php
}

function show_post($id, $pp, $p)
{

	$posts = get_posts(array('category' => $id,));
	?>
	<select class="car_select">
		<option value="0" selected="selected" disabled="disabled"><?php echo $pp[$p]; ?></option>
		<?php


		foreach ($posts as $post) {
			$at = explode(' ', $post->post_title);
			$title = $at[count($at) - 1];
			?>
			<option value="<?php echo get_permalink($post->ID) ?>"><?php echo $title; ?></option>
		<?php
		}
		?></select>
<?php
}

switch ($act) {
	case'show_cat':
		show_cat($id, $pp, $p);
		break;
	case 'show_posts':
		show_post($id, $pp, $p);
		break;

}
