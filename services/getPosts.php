<?php

function getPosts($app_id) {
  $url = "https://dummyapi.io/data/v1/post";
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

$posts = getPosts($app_id);

if ($posts && is_array($posts)) {
    foreach ($posts['data'] as $post) {
        $owner_picture = $post['owner']['picture'];
        $owner_name = $post['owner']['firstName'];
        $image = $post['image'];
        $tags = $post['tags'];
        $likes = $post['likes'];
        $text = $post['text'];
        $publishDate = $post['publishDate'];

        include "./components/post.php";
    }
}

?>