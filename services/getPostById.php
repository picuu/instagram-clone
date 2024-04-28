<?php

function getPostById($app_id, $post_id) {
    $url = "https://dummyapi.io/data/v1/post/$post_id";
    $opts = array('http' =>
        array(
            'method'  => 'GET',
            'header'  => "app-id: $app_id\r\n"
        )
    );

    $context  = stream_context_create($opts);
    $res = file_get_contents($url, false, $context);
    $data = json_decode($res, true);

    return $data;
}

?>