<?php
    $app_id = "662ce09b690e96c95e7103b4";
    include "./components/head.html";
    include "./components/header.html";
?>

<main class="scrolleable" data-simplebar>
    <div class="stories-container" data-simplebar>
        <section class="stories">
            <?php include "./services/getStories.php"; ?>
        </section>
    </div>
    <section class="posts">
        <?php include "./services/getPosts.php"; ?>
    </section>
</main>

<?php
    include "./components/footer.html";
    include "./components/foot.html";
?>