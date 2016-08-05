<?php

function httpPost($url, $post_string)
{
    $post_string = json_encode($post_string);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($post_string))
    );
    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
}


?>