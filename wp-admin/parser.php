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
require_once('admin-header.php');
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
<?php

require('./admin-footer.php');
