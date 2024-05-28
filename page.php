<!DOCTYPE html>
<html lang="en">
<?php 
  get_header();
  the_post();
?>

<body>
  <?php include_once('navbar-inner.php'); ?>
  <div class="container">
    <div class="py-5">
      <h1 class="default-title">
        <?php the_title() ?>
      </h1>
      <div class="default-featured-image my-4">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="default-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</body>

</html>