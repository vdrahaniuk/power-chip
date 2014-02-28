<?php

/**
 * @param $url
 * @param array $params
 * @return mixed
 */
function sendPost($url, $params = array(),$cookies=array())
{
	$myCurl = curl_init();
	curl_setopt_array($myCurl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_REFERER => 'http://www.tuningbox.su/',
		CURLOPT_POSTFIELDS => http_build_query($params)
	));
	$cookie='Cookie:';
	if($cookies){
		foreach($cookies as $k=>$v)
			$cookie.="$k=$v;";
	}
    $cookie.'<br\>\r\n';
	curl_setopt($myCurl, CURLOPT_HTTPHEADER, array(
		'X-Requested-With:XMLHttpRequest',
		'Host:www.tuningbox.su',
		'Origin:http://www.tuningbox.su',
		$cookie,
	));
	$response = curl_exec($myCurl);
	curl_close($myCurl);

	return $response;
}