<?php
include "includes/components/HOME/header.php"
?>

<body>
    <?php
    include "includes/components/HOME/navbar.php";
    ?>

    <main class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="fs-1 text-uppercase user-select-none">
                    Page Heading
                    <small class="fs-4 text-capitalize text-secondary ">Secondary Text</small>
                </h1>
                <hr>

                <?php
                if (isset($_POST['submit'])) {
                    $search = trim($_POST['search']);
                    $query = "SELECT * FROM `posts` WHERE post_tags LIKE '%$search%'";
                    $posts = mysqli_query($connection, $query);

                    if (!$posts) {
                        die("Query Failed " . mysqli_connect_error());
                    }

                    $totalRows = mysqli_num_rows($posts);
                    $currentRow = 1;
                    if ($totalRows == 0) {
                        echo "<h1>No Results Found.";
                    } else {
                        while ($row = mysqli_fetch_assoc($posts)) {
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];

                            include "includes/components/HOME/blog_card.php";
                        }
                    }
                } ?>
            </div>



            <?php
            include "includes/components/HOME/blog_sidebar.php";
            ?>
        </div>
    </main>
    <?php
    include "includes/components/HOME/footer.php";
    ?>

    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>