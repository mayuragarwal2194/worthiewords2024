<?php 
  // Template Name: Home Template

  // the_field('hero_slide_1','1495');
  // the_field('hero_fix_text','1495');
  // the_field('hero_dynamic_text_1','1495');
  // the_field('hero_dynamic_text_2','1495');
  // the_field('hero_dynamic_text_3','1495');
?>

<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <div class="main">
    <!-- Header Section -->
    <section class="header-section position-relative">
      <?php include_once('navbar.php'); ?>
      <div class="hero-banner">
        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php 
              if (have_rows('hero_slide','1495')) {
                $first = true; // Flag to track the first slide
                while (have_rows('hero_slide','1495')) {
                  the_row();
            ?>
            <div class="carousel-item <?php if ($first) { echo 'active'; $first = false; } ?>">
              <img src="<?php the_sub_field('image_1','1495') ?>" class="d-block w-100 h-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2><?php the_sub_field('static_text_1','1495') ?> <span
                    id="typed-<?php echo get_row_index(); ?>"></span></h2>
              </div>
            </div>
            <?php } }?>
          </div>


          <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button> -->
        </div>
      </div>
    </section>
    <!-- Our Designer Section -->
    <section class="our-designer-section py-5 my-4">
      <div class="container">
        <div class="w-100 d-flex flex-column flex-lg-row align-items-center justify-content-center gap-4">
          <?php 
            if (have_rows('our_company',1495)) {
              while (have_rows('our_company',1495)) {
                 the_row();
          ?>
          <div class="our-designer-left w-40" id="our-left">
            <div class="d-flex align-items-center gap-3 mb-30">
              <div class="image image-outer-wrapper d-inline-block">

                <div class="image-inner-wrapper p-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/./icons/heart-fill.svg" width="25px"
                    height="25px" alt="">
                </div>
              </div>
              <div>
                <h5 class="our-subhead">
                  <?php the_sub_field('title_1','1495') ?>
                </h5>
                <h4 class="our-head text-uppercase w-75 fw-600 mb-0">
                  <?php the_sub_field('sub_title','1495') ?>
                </h4>
              </div>
            </div>
            <p class="mb-0">
              <?php the_sub_field('description','1495') ?>
            </p>
          </div>
          <?php } } ?>
        </div>
      </div>
    </section>
    <!-- Our Mission Section -->
    <section class="our-mission-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7">
            <div class="our-mission-heading mb-4 mt-5">
              <h2 class="text-uppercase">
                <?php the_field('title_letter_black','1495'); ?>
                <span><?php the_field('title_letter_orange','1495'); ?></span>
              </h2>
              <h3 class="text-capitalize">
                <?php the_field('subtitle','1495'); ?>
              </h3>
            </div>
            <?php 
              if (have_rows('description',1495)) {
                while (have_rows('description',1495)) {
                  the_row();
            ?>
            <p class="">
              <?php the_sub_field('paragraph','1495') ?>
            </p>
            <?php } } ?>
            <a href="<?php the_permalink(1497); ?>" class="d-inline-block text-decoration-none text-white">Read More</a>
          </div>
          <div class="col-12 col-lg-5">
            <div class="our-mission-right position-relative">
              <div class="our-mission-right-image mt-5">
                <img src="<?php the_field('mission_image','1495'); ?>" class="w-100 h-100"
                  alt="">
              </div>
              <div class="image-overlay position-absolute"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section -->
    <section class="services-section my-5">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase ">
            <?php the_field('services_title','1495') ?>
          </h2>
          <div class="heading-seperator m-auto my-2"></div>
          <h3 class="section-subhead m-auto">
            <?php the_field('services_subtitle','1495') ?>
          </h3>
        </div>
        <div class="services-cards">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
              if (have_rows('card',1495)) {
                while (have_rows('card',1495)) {
                  the_row();
            ?>
            <div class="col">
              <div class="card h-100 border-0">
                <div
                  class="icon-wrapper rounded-circle m-auto d-flex align-items-center justify-content-center position-relative">
                  <i class="fa-regular fa-lightbulb icon-upper position-absolute"></i>
                  <i class="fa-regular fa-lightbulb icon-lower text-white"></i>
                </div>
                <div class="card-body text-center p-0">
                  <h5 class="card-title">
                    <?php the_sub_field('card_title','1495') ?>
                  </h5>
                  <p class="card-text my-3">
                    <?php the_sub_field('card_description','1495') ?>
                  </p>
                </div>
              </div>
            </div>
            <?php } } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Work Section -->
    <section class="work-section py-5" id="work-section">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase text-white">
            <?php the_field('counter_title','1495') ?>
          </h2>
          <div class="heading-seperator m-auto my-2"></div>
          <h3 class="section-subhead m-auto text-white">
            <?php the_field('counter_subtitle','1495') ?>
          </h3>
        </div>
        <ul class="work-cards-wrapper list-unstyled ps-0 d-lg-flex align-items-centerce justify-content-between">
          <?php 
            if (have_rows('work_cards',1495)) {
              while (have_rows('work_cards',1495)) {
                 the_row();
          ?>
          <li class="work-card text-center">
            <div class="work-counter fw-bold">
              <?php the_sub_field('work_counts','1495') ?>
            </div>
            <div class="work-seperator m-auto mb-4"></div>
            <div class="work-card-title text-uppercase">
              <?php the_sub_field('work_title','1495') ?>
            </div>
          </li>
          <?php }} ?>
        </ul>
      </div>
    </section>
    <!-- Progress Section -->
    <section class="progress-section my-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">
            <?php 
              if (have_rows('progress_paragraphs',1495)) {
                while (have_rows('progress_paragraphs',1495)) {
                  the_row();
            ?>
            <p>
              <?php the_sub_field('paragraph','1495') ?>
            </p>
            <?php }} ?>
          </div>
          <div class="col-12 col-lg-6">
            <?php 
              if (have_rows('progress_bar',1495)) {
                while (have_rows('progress_bar',1495)) {
                  the_row();
            ?>
            <div class="progress-group mb-3">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <?php the_sub_field('progress_title','1495') ?>
                <span>
                  <?php the_sub_field('progress_count','1495') ?>%
                </span>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php the_sub_field('progress_count','1495') ?>%;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <?php }} ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section -->
    <section class="blog-section py-5">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase">
            <?php the_field('blog_section_title','1495'); ?>
          </h2>
          <div class="heading-seperator m-auto my-2"></div>
        </div>
        <div class="blog-cards-wrapper">
          <?php
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => -1
            );

            $blogQuery = new WP_Query($args);  
            while ($blogQuery->have_posts()) {
              $blogQuery->the_post();
              $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
          ?>
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
                <p class="card-text">
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </div>
          </a>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Feedback Section -->
    <section class="feedback-section my-5">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase">
            <?php the_field('feedback_section_title','1495') ?>
          </h2>
          <div class="heading-seperator m-auto my-2"></div>
        </div>
        <div class="clients-comments-wrapper">
          <div class="row position-relative">
            <div class="client-image-section d-inline-block position-absolute w-fit-content">
              <div class="client-profile-image rounded-circle">
                <img src="<?php the_field('client_image_1','1495') ?>"
                  class="w-100 h-100 rounded-circle object-cover" alt="">
              </div>
            </div>
            <div class="col-6">
              <div class="client-info text-end me-5">
                <h6 class="mb-0 fw-bold"> 
                  <?php the_field('client_name_1','1495') ?>
                </h6>
                <span>
                  <?php the_field('client_designation_1','1495') ?>
                </span>
              </div>
            </div>
            <div class="col-6">
              <p class="client-comment position-relative mb-5">
                <?php the_field('feedback_1','1495') ?>
              </p>
            </div>
          </div>
          <div class="row position-relative flex-row-reverse">
            <div class="client-image-section d-inline-block position-absolute w-fit-content">
              <div class="client-profile-image rounded-circle">
                <img src="<?php the_field('client_image_2','1495') ?>"
                  class="w-100 h-100 rounded-circle object-cover" alt="">
              </div>
            </div>
            <div class="col-6">
              <div class="client-info text-start ms-5">
                <h6 class="mb-0 fw-bold">
                  <?php the_field('client_name_2','1495') ?>
                </h6>
                <span>
                  <?php the_field('client_designation_2','1495') ?>
                </span>
              </div>
            </div>
            <div class="col-6">
              <p class="client-comment position-relative mb-5">
                <?php the_field('feedback_2','1495') ?>
              </p>
            </div>
          </div>
          <div class="row position-relative">
            <div class="client-image-section d-inline-block position-absolute w-fit-content">
              <div class="client-profile-image rounded-circle">
                <img src="<?php the_field('client_image_3','1495') ?>"
                  class="w-100 h-100 rounded-circle object-cover" alt="">
              </div>
            </div>
            <div class="col-6">
              <div class="client-info text-end me-5">
                <h6 class="mb-0 fw-bold"><?php the_field('client_name_3','1495') ?></h6>
                <span><?php the_field('client_designation_3','1495') ?></span>
              </div>
            </div>
            <div class="col-6">
              <p class="client-comment position-relative mb-5">
                <?php the_field('feedback_3','1495') ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Section -->
    <?php get_footer(); ?>
  </div>
</body>

</html>
<?php include_once('footer-links.php'); ?>

<script>
function heroTypedJs() {
  <?php if (have_rows('hero_slide', '1495')) { ?>
  <?php $index = 1; ?>
  <?php while (have_rows('hero_slide', '1495')) { the_row(); ?>
  new Typed('#typed-<?php echo $index; ?>', {
    strings: [
      "<?php the_sub_field('dynamic_text_1'); ?>",
      "<?php the_sub_field('dynamic_text_2'); ?>",
      "<?php the_sub_field('dynamic_text_3'); ?>"
    ],
    typeSpeed: 40,
    delaySpeed: 90,
    loop: true
  });
  <?php $index++; ?>
  <?php } ?>
  <?php } ?>
}



heroTypedJs();

var tl = gsap.timeline();

tl.from("#nav .logo, #nav li", {
  y: -100,
  duration: 0.5,
  delay: .5,
  opacity: 0,
  stagger: 0.1
});

// gsap.to("#nav", {
//   background: "white",
//   duration: 1.2,
//   scrollTrigger: {
//     trigger: ".our-designer-section",
//     scroller: ".main",
//     markers: true,
//     start: "top 90%",
//     end: "top 80%",
//     scrub: 1
//   }
// })
// gsap.to("#nav li a", {
//   color:"black" ,
//   duration: 1.2,
//   scrollTrigger: {
//     trigger: ".our-designer-section",
//     scroller: ".main",
//     markers: true,
//     start: "top 90%",
//     end: "top 80%",
//     scrub: 1
//   }
// })

// gsap.from("#our-left", {
//   x: -1000,
//   duration: 1.5,
//   scrollTrigger: {
//     trigger: ".our-designer-section",
//     scroller: ".main",
//     markers: false,
//     start: "top 80%",
//     end: "top 30%"
//   }
// });

// gsap.from("#our-right", {
//   x: 2000,
//   duration: 1.5,
//   scrollTrigger: {
//     trigger: ".our-designer-section",
//     scroller: ".main",
//     markers: false,
//     start: "top 80%",
//     end: "top 30%"
//   }
// });
</script>