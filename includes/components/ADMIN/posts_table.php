<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Image</th>
            <th scope="col">Tags</th>
            <th scope="col">Comments</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `posts`";
        $posts = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($posts)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_category_id = $row['post_category_id'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_title = $row['post_title'];
            $post_comment_count = $row['post_comment_count'];
            $post_status = $row['post_status'];
            $post_tags = $row['post_tags'];
            echo "<tr>
                                <th scope='row'>$post_id</th>
                                <td>$post_title</td>
                                <td>$post_author</td>
                                <td>$post_category_id</td>
                                <td>$post_status</td>
                                <td><img width='200' src='$post_image' alt='post_image' class='img-fluid'/></td>
                                <td>$post_tags</td>
                                <td>$post_comment_count</td>";
        ?>
        <?php

            $unixTimeFormat = strtotime($post_date);
            $formattedDate = date("F j, Y \a\\t h:i A", $unixTimeFormat);
            echo "<td>$formattedDate</td> </tr>";
        }
        ?>
    </tbody>
</table>