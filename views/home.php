<?php
include "layout/header.php";
include "layout/navigation.php";
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->

            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- Blog Posts -->
                <?php foreach ($posts as $post): ?>
                <h2>
                    <a href="#"><?php echo $post["post_title"] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post["post_author"] ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post["post_date"] ?></p>
                <hr>
                <img class="img-responsive" src="<?php echo $post["post_image"] ?>" alt="post images">
                <hr>
                <p><?php echo $post["post_content"] ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <?php endforeach; ?>
            </div>

        <!-- Sidebar -->
        <?php include "partitions/blogSidebar.php"; ?>

        </div>

        <hr>

<?php include "layout/footer.php"; ?>
