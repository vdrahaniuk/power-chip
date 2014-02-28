<?php
set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('memory_limit', '128M');
@ini_set('display_errors', 0);
error_reporting(0);
require_once('parser-helper.php');
require_once('simple_html_dom.php');
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');
require_once(dirname(dirname(__FILE__)) . '/wp-includes/wp-db.php');
require_once(dirname(dirname(__FILE__)) . '/wp-admin/includes/taxonomy.php');
global $wpdb;

$urlBrands = 'http://www.tuningbox.su/index.php?action=show_brands';
$urlModels = 'http://www.tuningbox.su/index.php?action=show_models';
$urlEngine = 'http://www.tuningbox.su/index.php?action=show_moto';

$html = new simple_html_dom();
$data = array();
$ids = @$_GET['cat_ids'];


echo $ids = implode(',', $ids);

$wpdb->query('TRUNCATE TABLE tn_cat_car_customer');
$wpdb->query('TRUNCATE TABLE tn_cat_car_model');
$wpdb->query('TRUNCATE TABLE tn_cat_car_engine');
$carTypes = $wpdb->get_results("select * from tn_cat_car_type");
$i = 0;

foreach ($carTypes as $carType) {
	$strBrands = sendPost($urlBrands, array(
		'type' => 'vehicle_type',
		'type_val' => $carType->name,
		'type_id' => $carType->id,
	), array(
		'type' => str_replace(' ', '-', strtolower($carType->name))
	));


	$html->load($strBrands);
	$htmlBrands = $html->find('select option');
	foreach ($htmlBrands as $brand) {
		if ($brand->value === "0") {
			continue;
		}
		$cat_id_brand = wp_create_category($brand->value, $carType->cat_id);

		$wpdb->insert('tn_cat_car_customer', array(
			'id' => $brand->value,
			'name' => $brand->innertext,
			'car_type' => $carType->id,
			'cat_id' => $cat_id_brand,
		));


		$strModels = sendPost($urlModels, array(
			'type' => 'brand',
			'brand_val' => $brand->innertext,
			'brand' => $brand->value,
		), array(
			'type' => str_replace(' ', '-', strtolower($carType->name)),
			'brand' => $brand->value,
		));
//var_dump($strModels);

		$html1 = new simple_html_dom();
		$html1->load($strModels);
		$htmlModels = $html1->find('select option');
		foreach ($htmlModels as $model) {
			if ($model->value === "0") {
				continue;
			}
			$cat_id_model = wp_create_category($model->value, $cat_id_brand);
			//var_dump($model->value);
			$data1 = array(
				'id' => $model->value,
				'name' => $model->innertext,
				'car_customer' => $brand->value,
				'cat_id' => $cat_id_model,
				'car_type' => $carType->id,
			);

			$ok = $wpdb->insert('tn_cat_car_model', $data1);

			$strEngine = sendPost($urlEngine, array(
				'type' => 'model',
				'model_val' => $model->innertext,
				'model' => $model->value,
			), array(
				'type' => str_replace(' ', '-', strtolower($carType->name)),
				'brand' => $brand->value,
				'model' => $model->value,
			));

			$html2 = new simple_html_dom();
			$html2->load($strEngine);
			$htmlEngine = $html2->find('select option');

			foreach ($htmlEngine as $engine) {

				if ($engine->value === "0") {
					continue;
				}

				$data2 = array(
					'id' => $engine->value,
					'name' => $engine->innertext,
					'car_model' => $model->value,
				);

				$wpdb->insert('tn_cat_car_engine', $data2);

				$i++;


			}

		}

	}

}
Header('Location:/wp-admin/parser.php?msg=Успешно');


