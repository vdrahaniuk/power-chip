<?php
$arrReplace = array(
	'а' => 'a',
	'в' => 'b',
	'с' => 'c',
);
ini_set("max_execution_time", "3600");
require_once('simple_html_dom.php');
//require_once('class.get.image.php');
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');
require_once(dirname(dirname(__FILE__)) . '/wp-includes/wp-db.php');


global $wpdb;

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


	$html = file_get_html($url);
	if (!$html) {
		$ok = $wpdb->update('tn_cat_car_engine', array('parsed' => 1), array('id' => $cat->engine, 'car_model' => $cat->model));
		continue;

	}
	$priceTable = $html->find('table.dataGrid2');
	$priceTable = $priceTable[0];
	$priceArr = array();
	$pKeys = $priceTable->find('tr', 1);
	$pVals = $priceTable->find('tr', 2)->find('td');
	foreach ($pKeys->find('td') as $k => $v) {
		$key = mb_strtolower((string)$v->plaintext);
		switch ($key) {
			case'а':
				$key = 'a';
				break;
			case'в':
				$key = 'b';
				break;
			case'с':
				$key = 'c';
				break;

		}
		$priceArr[$key] = $pVals[$k]->innertext;

	}
	//var_dump($priceArr);

	$table = $html->find('table.dataGrid');
	$table = $table[0];
	if (!empty($priceArr)) {
		$key = mb_strtolower((string)$table->find('tr', 5)->find('td', 0)->innertext);
		$table->find('tr', 5)->find('td', 0)->innertext = $priceArr[$key];
	}

	switch ($table->find('tr', 4)->find('td', 0)->innertext) {
		case'Easy':
			$table->find('tr', 4)->find('td', 0)->innertext = 'простая - 30 мин';
			break;
		case'Medium':
			$table->find('tr', 4)->find('td', 0)->innertext = 'средняя - 45 мин';
			break;
		case'Hard':
			$table->find('tr', 4)->find('td', 0)->innertext = 'усложненная - 1 час';
			break;
		default:
			$table->find('tr', 4)->find('td', 0)->innertext = 'от 30 мин до часа';
	}

	$page .= $table->outertext;
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
	if ($post_id) {
		$wpdb->update('tn_cat_car_engine', array('parsed' => 1), array('id' => $cat->engine, 'car_model' => $cat->model));
	}
	$i++;
}
echo $i;

