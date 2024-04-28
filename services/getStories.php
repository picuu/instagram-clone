<?php

function getStories($app_id) {
  $page_number = rand(0, 3);
  $url = "https://dummyapi.io/data/v1/user?page=$page_number&limit=20";
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