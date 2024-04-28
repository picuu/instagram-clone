<?php

function getPosts($app_id) {
  $page_number = rand(0, 30);
  $url = "https://dummyapi.io/data/v1/post?page=$page_number&limit=20";
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