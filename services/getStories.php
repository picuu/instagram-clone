<?php

function getStories($app_id) {
  $url = "https://dummyapi.io/data/v1/user";
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

$users = getStories($app_id);

if ($users && is_array($users)) {
    foreach ($users['data'] as $user) {
        $owner_picture = $user['picture'];
        $owner_name = $user['firstName'];

        include "./components/story.php";
    }
}

?>