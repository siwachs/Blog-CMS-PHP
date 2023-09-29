<?php
function isUrlReachable($url)
{
    $headers = @get_headers($url);
    return $headers && strpos($headers[0], '200') !== false;
}

function insertCategory($connection, $cat_title)
{
    $query = "INSERT INTO `categories`(`cat_title`) VALUES ('$cat_title')";

    $create_categoty = mysqli_query($connection, $query);
    if (!$create_categoty) {
        die("Query Failed " . mysqli_error($connection));
    } else {
        header("Location: categories.php");
    }
}

function deleteCategory($connection, $cat_id)
{
    $query = "DELETE FROM `categories` WHERE cat_id= $cat_id";
    $delete_categoty = mysqli_query($connection, $query);
    if (!$delete_categoty) {
        die("Query Failed " . mysqli_error($connection));
    } else {
        header("Location: categories.php");
    }
}
