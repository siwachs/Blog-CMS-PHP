<?php
include "../includes/components/ADMIN/header.php";
?>

<body>
    <?php
    include "../includes/components/ADMIN/navbar.php";
    ?>

    <div class="wrapper">
        <?php
        include "../includes/components/ADMIN/sidebar.php";
        ?>
        <div class="content container-fluid">
            <div class="row">
                <h1 class="p-3">Manage Posts</h1>
                <div class="col-sm-12 p-3">
                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {
                        case 'add_post':
                            include "../includes/components/ADMIN/add_posts.php";
                            break;
                        default:
                            include "../includes/components/ADMIN/posts_table.php";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>