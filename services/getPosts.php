<?php

$app_id = "662ce09b690e96c95e7103b4";
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

if ($data && is_array($data)) {
    foreach ($data['data'] as $post) {
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