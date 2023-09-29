<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">CMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                $query = "SELECT * FROM `categories`";
                $categories = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($categories)) {
                    $cat_title = $row['cat_title'];
                    echo "<li class='nav-item'>
                    <a href='#' class='nav-link'>$cat_title</a> </li>";
                }
                ?>

                <li class="nav-item">
                    <a href="admin" class='nav-link'>Admin Board</a>
                </li>
            </ul>
        </div>
    </div>
</nav>