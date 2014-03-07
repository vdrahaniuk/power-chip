<?php
/**
 * Add Link Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Administration Bootstrap */
require_once('./admin.php');

if (!current_user_can('manage_links'))
	wp_die(__('You do not have sufficient permissions to add links to this site.'));

$title = __('Parser');
$parent_file = 'parser.php';

require_once('./includes/meta-boxes.php');
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');
require_once('admin-header.php');
global $wpdb;

if (@$_POST['act'] == 'save') {
	$keys = $_POST['key'];
	$values = $_POST['value'];
	$ids = $_POST['id'];

	foreach ($keys as $k => $v) {
		$data = array(
			'key' => mb_strtolower($v),
			'value' => $values[$k]);
		if (isset($ids[$k]) && !empty($ids[$k])) {
			echo 'tyt';
			$wpdb->update('prices', $data, array('id' => $ids[$k]), null, array('%d'));
		} else {
			$wpdb->insert('prices', $data);
		}
	}

}
$prices = $wpdb->get_results("select * from prices");
echo @$_GET['msg'];
?>
	<h3>Спарсить категории</h3>
	<form action="/wp-admin/parser-category.php" method="GET">
		<input type="submit" value="Спарсить">
	</form>

	<h3>Спарсить страницы</h3>
	<form action="/wp-admin/parser-content.php" method="GET">
		<input type="submit" value="Спарсить">
	</form>
	<h3>Редактро цен</h3>
	<form action="/wp-admin/parser.php" method="POST">
		<table id="price_table">
			<?php foreach ($prices as $price) { ?>
				<tr class="values">
					<td><input name="key[]" value="<?php echo $price->key ?>"></td>
					<td>
						<input name="value[]" value="<?php echo $price->value ?>">
						<input name="id[]" type="hidden" value="<?php echo $price->id ?>">
					</td>
				</tr>
			<? } ?>
			<tr>
				<td><input type="submit" value="Сохранить"></td>
				<td><input type="button" id="add_button" value="Добавить ише 1"></td>
			</tr>
		</table>
		<input type="hidden" value="save" name="act">
	</form>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery('#add_button').click(function () {
				jQuery('#price_table tr.values:last').after('<tr><td><input name="key[]" value=""></td><td><input name="value[]" value=""><input name="id[]" type="hidden" value=""></td></tr>');
			})
		})
	</script>
<?php

require('./admin-footer.php');
