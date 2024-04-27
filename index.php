<?php
    include "./components/head.html";
    include "./components/header.html";
?>

<main>
    <section class="posts" data-simplebar>
        <div class="posts-content">
            <?= include "./services/getPosts.php" ?>
        </div>
    </section>
</main>

<?php
    include "./components/footer.html";
    include "./components/foot.html";
?>