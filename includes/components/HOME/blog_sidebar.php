<div class="col-md-4">
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-btn">
                <button name="submit" class="btn btn-dark" type="submit" id="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>

    </div>

    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php
                    $query = "SELECT * FROM `categories`";
                    $categories = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($categories)) {
                        $cat_title = $row['cat_title'];
                        echo "<li class='nav-item'>
                    <a href='#'>{$cat_title}</a> </li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a></li>
                    <li><a href="#">Category Name</a></li>
                    <li><a href="#">Category Name</a></li>
                    <li><a href="#">Category Name</a></li>
                </ul>
            </div> -->
        </div>
    </div>

    <?php
    include "widget.php";
    ?>
</div>