<?php

ini_set("max_execution_time", "3600");
require_once('simple_html_dom.php');
//require_once('class.get.image.php');
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');
require_once(dirname(dirname(__FILE__)) . '/wp-includes/wp-db.php');


global $wpdb;

//$image = new GetImage;
//$image->save_to=dirname(dirname(__FILE__)).'/../wp-content/uploads.parser/';
//$image->set_extension=true;
$cats = $wpdb->get_results("SELECT
ct.`name` AS type,
cc.id AS customer,
cm.id AS model,
ce.id AS `engine`,
cm.car_customer,
cm.cat_id
FROM
tn_cat_car_type AS ct
LEFT JOIN tn_cat_car_customer AS cc ON ct.id = cc.car_type
LEFT JOIN tn_cat_car_model AS cm ON cm.car_customer = cc.id AND cm.car_type = ct.id
LEFT JOIN tn_cat_car_engine AS ce ON ce.car_model = cm.id
WHERE
ce.parsed=0
limit 15");
$i = 0;


foreach ($cats as $cat) {
	$page = "<div>";
	$type = str_replace(' ', '-', strtolower($cat->type));
	echo $url = "http://www.tuningbox.su/tbv/{$type}/{$cat->customer}/{$cat->model}/{$cat->engine}.htm";

	$strPage = file_get_contents($url);

	$html = str_get_html($strPage);
	$table = $html->find('table.dataGrid');

	foreach ($table as $t) {
		if ($t->outertext) {
			$page .= $t->outertext;
		};
	}
	$imgs = $html->find('img[id=boxImg]');
	foreach ($imgs as $i) {
		if ($i->src) {
			$linkImage = "http://www.tuningbox.su{$i->src}";
		}

	}
	if ($linkImage)
		$page .= "<img src='{$linkImage}'>";
		$page .= "</div>";
	$post_name = str_replace('.', '-', strtolower("{$cat->customer}_{$cat->model}_{$cat->engine}"));
	
	echo "<br>";
	$post_id = $wpdb->get_results("select id from $wpdb->posts where post_name='{$post_name}'");
	$post_id = @$post_id[0]->id;
	

	$my_post = array(
		'ID' => $post_id,
		'post_title' => "{$cat->customer} {$cat->model} {$cat->engine}",
		'post_content' => $page,
		'post_status' => 'publish',
		'post_author' => 1,
		'post_name' => $post_name,
		'post_category' => array($cat->cat_id)
	);

// Вставляем запись в базу данных

	$post_id = wp_insert_post($my_post);
	$_post_footer_id = 4489;
	if (get_post_meta($post_id, '_post_footer_id') == "")
		add_post_meta($post_id, '_post_footer_id', $_post_footer_id, true);
	elseif ($_post_footer_id != get_post_meta($post_id, '_post_footer_id', true))
		update_post_meta($post_id, '_post_footer_id', $_post_footer_id);
	if($post_id){
	$wpdb->update('tn_cat_car_engine', array('parsed' => 1), array('id' => $cat->engine,'car_model'=>$cat->model));
	}
	$i++;
}
echo $i;


