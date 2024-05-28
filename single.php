<!DOCTYPE html>
<html lang="en">

<?php 
  get_header(); 
  the_post();
?>

<body>
  <div class="main">
    <?php include_once('navbar-inner.php') ?>
    <section class="blog-detail-section section-padding">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase"><?php the_title(); ?></h2>
          <div class="heading-seperator m-auto my-2"></div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="card border-0 bg-transparent">
              <div class="image-wrapper overflow-hidden">
                <?php 
                  $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                ?>
                <img src="<?php echo $imagepath[0]?>" class="w-100 rounded" alt="...">
              </div>
              <div class="card-body ps-0">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <div class="date-created my-2">
                  DATE CREATED: <span><?php the_date(); ?></span>
                </div>
                <p class="card-text">
                  <?php the_content(); ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section>
    <section class="comment-section section-padding">
      <div class="container">
        <div class="comment-wrapper w-50 m-auto">
          <?php/* comment_form();*/ ?>
          <?php comments_template(); ?>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
  </div>
</body>

</html>

<?php include_once('footer-links.php'); ?>