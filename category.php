<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <div class="main">
    <?php include_once('navbar-inner.php') ?>
    <section class="blog-section section-padding">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase ">Blogs</h2>
          <div class="heading-seperator m-auto my-2"></div>
        </div>
        <div class="section-body blog-cards-wrapper">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
              while (have_posts()) {
                the_post();
                $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
            ?>
            <div class="col">
              <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                <div class="card border-0 bg-transparent">
                  <div class="image-wrapper overflow-hidden">
                    <img src="<?php echo $imagepath[0]?>" class="card-img-top rounded" alt="...">
                  </div>
                  <div class="card-body ps-0">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <div class="date-created my-2">
                      DATE CREATED: <span><?php the_date(); ?></span>
                    </div>
                    <div class="card-text blog-excerpt">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php } ?>
          </div>
          <div class="pagination mt-4 p-3">
            <?php 
              echo wp_pagenavi(); 
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
  </div>
</body>

</html>

<!-- Bootstrap 5 Bundle CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>