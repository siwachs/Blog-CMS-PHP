<?php
if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];
    $query = "SELECT * FROM `categories` WHERE cat_id= $cat_id";
    $fetch_query = mysqli_query($connection, $query);

    if (!$fetch_query) {
        die("Query Failed " . mysqli_error($connection));
    }

    if (isset($_POST['edit-submit'])) {
        $cat_title = $_POST['edit-title'];
        $query = "UPDATE `categories` SET `cat_title`='$cat_title' WHERE cat_id =$cat_id";
        $edit_categoty = mysqli_query($connection, $query);
        if (!$edit_categoty) {
            die("Query Failed " . mysqli_error($connection));
        } else {
            header("Location: categories.php");
        }
    }
?>
    <form action="" method="post">
        <div class="my-3">
            <label for="edit-title" class="form-label">Category Title</label>
            <input value="<?php
                            $row = mysqli_fetch_assoc($fetch_query);
                            $cat_title = $row['cat_title'];
                            echo $cat_title;
                            ?>" name="edit-title" type="text" class="form-control" id="edit-title">
        </div>
        <button name="edit-submit" type="submit" class="btn btn-primary">Add Category</button>
    </form>
<?php } ?>