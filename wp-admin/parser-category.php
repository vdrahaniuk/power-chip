<?php

error_reporting('E_ALL');

require_once('parser-helper.php');
require_once('simple_html_dom.php');
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');
require_once(dirname(dirname(__FILE__)) . '/wp-includes/wp-db.php');

global $wpdb;

$urlBrands = 'http://www.tuningbox.su/index.php?action=show_brands';
$urlModels = 'http://www.tuningbox.su/index.php?action=show_models';

$html = new simple_html_dom();
$data = array();
$carTypes = $wpdb->get_results("select * from tn_cat_car_type");
foreach ($carTypes as $carType) {
	$strBrands = sendPost($urlBrands, array(
		'type' => 'vehicle_type',
		'type_val' => $carType->name,
		'type_id' => $carType->id,
	));


	$html->load($strBrands);
	$htmlBrands = $html->find('select option');
	foreach ($htmlBrands as $brand) {
//		if ($brand->value == 0)
//			continue;
		$data = array(
			'id' => $brand->value,
			'name' => $brand->innertext,
			'car_type' => $carType->id,
		);
		$isset = $wpdb->get_results("select id from tn_cat_car_customer where id  = '$brand->value'");

		if (count($isset)) {
			echo 'u ';
			$ok = $wpdb->update('tn_cat_car_customer', $data, array('id' => $brand->value),null,array('%s'));
			var_dump($ok);
		} else {
			echo ' i';
			$wpdb->insert('tn_cat_car_customer', $data);
		}


//		$strModels = sendPost($urlModels, array(
//			'type' => 'brand',
//			'brand_val' => $brand->innertext,
//			'brand' => $brand->value,
//		));
////var_dump($data);
//		$html1= new simple_html_dom();
//		$html1->load($strModels);
//		$htmlModels = $html->find('select option');
//		foreach ($htmlModels as $model) {
//			//var_dump($data);
//			$data1 = array(
//				'id' => $model->value,
//				'name' => $model->innertext,
//				'car_customer' => $data,
//			);
//			$isset = $wpdb->get_results("select id from tn_cat_car_model where id =$model->value");
//
//			if (count($isset)){}
//				$wpdb->update('tn_cat_car_model', $data1, array('id' => $model->value),array('%s','%s','%s'),array('%s'));
//			else
//				$wpdb->insert('tn_cat_car_model', $data1);
//
//		}
//		unset($model);
	}
	unset($brand);
}
unset($carType);

