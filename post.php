<?php
    $app_id = "662ce09b690e96c95e7103b4";
    include "./components/head.html";
    include "./services/getPostById.php";

    if (isset($_REQUEST['post-id']) && $_REQUEST['post-id'] != "") {
        $post_id = $_REQUEST['post-id'];

        $post = getPostById($app_id, $post_id);
    
        $owner_picture = $post['owner']['picture'];
        $owner_name = strtolower($post['owner']['firstName']);
        $owner_id = $post['owner']['id'];
        $image = $post['image'];
        $tags = $post['tags'];
        $likes = $post['likes'];
        $text = $post['text'];
        $publishDate = $post['publishDate'];
    } else {
        header("Location: ./");
    }

?>

<header class="main-header user-header post-header">
    <a href="./" class="icon small-icon">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </a>

    <div class="post-header-username">
        <h1><?= $owner_name ?></h1>
        <h2>Publicaciones</h2>
    </div>
    
    <div class="header-icons"></div>
</header>

<main class="scrolleable" data-simplebar>
    <section class="posts">
        <?php include "./components/post.php"; ?>
    </section>
</main>

<?php
    include "./components/footer.html";
    include "./components/foot.html";
?>