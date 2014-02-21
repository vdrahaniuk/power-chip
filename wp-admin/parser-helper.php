<?php

/**
 * @param $url
 * @param array $params
 * @return mixed
 */
function sendPost($url, $params = array())
{
	$myCurl = curl_init();
	curl_setopt_array($myCurl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => http_build_query($params)
	));
	$response = curl_exec($myCurl);
	curl_close($myCurl);

	return $response;
}