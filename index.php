<?php
    $app_id = "662ce09b690e96c95e7103b4";
    include "./components/head.html";
    include "./components/header.html";
?>

<main class="scrolleable" data-simplebar>
    <div class="stories-container" data-simplebar>
        <section class="stories">
            <?php
                include "./services/getStories.php";

                $users = getStories($app_id);

                if ($users && is_array($users)) {
                    foreach ($users['data'] as $user) {
                        $owner_picture = $user['picture'];
                        $owner_name = $user['firstName'];

                        include "./components/story.php";
                    }
                }
            ?>
        </section>
    </div>
    <section class="posts">
        <?php
            include "./services/getPosts.php";

            $posts = getPosts($app_id);

            if ($posts && is_array($posts)) {
                foreach ($posts['data'] as $post) {
                    $owner_picture = $post['owner']['picture'];
                    $owner_name = strtolower($post['owner']['firstName']);
                    $owner_id = $post['owner']['id'];
                    $image = $post['image'];
                    $tags = $post['tags'];
                    $likes = $post['likes'];
                    $text = $post['text'];
                    $publishDate = $post['publishDate'];

                    include "./components/post.php";
                }
            }
        ?>
    </section>
</main>

<?php
    include "./components/footer.html";
    include "./components/foot.html";
?>