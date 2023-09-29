<?php
require "../includes/utils.php";
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
                <h1 class="p-3">Manage Categories</h1>
                <div class="col-xs-12 col-lg-6 p-3">
                    <?php
                    if (isset($_POST['submit'])) {
                        $cat_title = $_POST['title'];
                        if ($cat_title === "" || empty($cat_title)) {
                            echo "<h3 class='text-danger'>Title must not be empty.</h3>";
                        } else {
                            insertCategory($connection, $cat_title);
                        }
                    }

                    if (isset($_GET['delete'])) {
                        $cat_id = $_GET['delete'];
                        deleteCategory($connection, $cat_id);
                    }
                    ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Category Title</label>
                            <input name="title" type="text" class="form-control" id="title">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Add Category</button>
                    </form>

                    <?php
                    include "../includes/components/ADMIN/update_category.php";
                    ?>
                </div>

                <div class="col-xs-12 col-lg-6 p-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM `categories`";
                            $categories = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($categories)) {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<tr>
                                <th scope='row'>$cat_id</th>
                                <td>$cat_title</td>
                                <td><a class='text-primary' href='categories.php?delete=$cat_id'>Delete</a></td>
                                <td><a class='text-primary' href='categories.php?edit=$cat_id'>Edit</a></td>
                            </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>