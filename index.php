<?php
include "includes/components/HOME/header.php";
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
        $query = "SELECT * FROM `posts`";
        $posts = mysqli_query($connection, $query);
        $totalRows = mysqli_num_rows($posts);
        $currentRow = 1;

        while ($row = mysqli_fetch_assoc($posts)) {
          $post_title = $row['post_title'];
          $post_author = $row['post_author'];
          $post_date = $row['post_date'];
          $post_image = $row['post_image'];
          $post_content = $row['post_content'];

          include "includes/components/HOME/blog_card.php";
        }
        ?>
      </div>



      <?php
      include "includes/components/HOME/blog_sidebar.php";
      ?>
    </div>
  </main>
  <?php
  include "includes/components/HOME/footer.php";
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>