<h2>
    <a href="#" class="link-primary fw-semibold"><?php echo $post_title ?></a>
</h2>
<p class="lead">by <a href="index.php" class="fs-4 fw-medium"><?php echo $post_author ?></a></p>
<p>
    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
    <?php
    $unixTimeFormat = strtotime($post_date);
    $formattedDate = date("F j, Y \a\\t h:i A", $unixTimeFormat);
    echo "Posted on " . $formattedDate;
    ?>
</p>
<hr />
<img class="img-fluid" src="<?php
                            echo $post_image; ?>" />
<hr />
<p>
    <?php
    $text = nl2br($post_content);
    echo $text; ?>
</p>
<a class="btn btn-primary" href="#">Read More <i class="fa fa-chevron-right custom-icon-size" aria-hidden="true"></i></a>
<?php
if ($currentRow !== $totalRows) {
    echo "<hr class='my-5'>";
    $currentRow++;
}
