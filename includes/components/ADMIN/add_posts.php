<?php
if (isset($_POST['create_post'])) {
    $post_title = $_POST['title'];
    $post_category = $_POST['category'];
    $post_author = $_POST['author'];
    $post_status = $_POST['status'];

    // Image File
    $post_image = $_FILES['image']['name'];
    $post_image_temp_location = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['tags'];
    $post_content = mysqli_real_escape_string($connection, $_POST['content']);

    move_uploaded_file($post_image_temp_location, "../images/$post_image");

    $query = "INSERT INTO `posts`(`post_category_id`, `post_title`, `post_author`, `post_image`, `post_content`, `post_tags`, `post_status`) VALUES ('$post_category','$post_title','$post_author','../images/$post_image','$post_content','$post_tags','$post_status')";

    $create_post = mysqli_query($connection, $query);
    if (!$create_post) {
        die("Query Failed " . mysqli_error($connection));
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category Id</label>
        <input name="category" type="number" class="form-control" id="category">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input name="author" type="text" class="form-control" id="author">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input name="status" type="text" class="form-control" id="status">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input name="image" type="file" class="form-control" id="image">
    </div>
    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <input name="tags" type="text" class="form-control" id="tags">
    </div>
    <div class="form-group mb-3">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="content" rows="8"></textarea>
    </div>

    <button name="create_post" type="submit" class="btn btn-primary">Submit</button>
</form>