<?php 
  // Template Name: About Us Template
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
        <div class="about-banner-wrapper">
          <div class="about-overlay d-flex align-items-center justify-content-center text-white text-uppercase">
            <h2 class="mb-0">About Us</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Section -->
    <section class="aboutus-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">
            <h2 class="section-head text-uppercase mb-4">
              <?php the_field('about_section_title','1497') ?>
            </h2>
            <p class="mb-0 pe-5 me-5">
              <?php the_field('about_section_description','1497') ?>
            </p>
            <div class="sign-art text-capitalize">
              <?php the_field('about_footer_head','1497') ?>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="aboutus-slider">
              <div class="slider-item">
                <img src="<?php echo get_template_directory_uri(); ?>/./images/abt1.png" alt="">
              </div>
              <div class="slider-item">
                <img src="<?php echo get_template_directory_uri(); ?>/./images/abt2.png" alt="">
              </div>
              <div class="slider-item">
                <img src="<?php echo get_template_directory_uri(); ?>/./images/abt3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Facts Section -->
    <section class="facts-section">
      <div class="about-overlay text-white">
        <div class="container">
          <div class="row">
            <?php 
              if (have_rows('facts',1497)) {
                while (have_rows('facts',1497)) {
                  the_row();
            ?>
            <div class="col-12 col-md-3">
              <div class="text-center">
                <div class="counter">
                  <?php the_sub_field('fact_count','1497') ?>
                </div>
                <h5 class="counter-title text-uppercase mb-0">
                  <?php the_sub_field('fact_name','1497') ?>
                </h5>
              </div>
            </div>
            <?php }} ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Choose Section -->
    <section class="choose-section section-padding">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="section-head text-uppercase">
            <?php the_field('why_section_title','1497') ?>
          </h2>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4 align-items-start">
          <div class="col">
            <div class="card h-100 border-0">
              <div class="icon-wrapper m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512">
                  <path
                    d="M451.229 188.098C432.682 169.967 407.95 160 381.585 160c-26.363 0-51.095 9.967-69.642 28.098l-42.229 41.187 13.649 13.447 42.229-41.306c14.933-14.529 34.764-22.573 55.878-22.573 21.113 0 40.946 8.044 55.878 22.573 30.797 30.139 30.797 79.13 0 109.148-14.932 14.529-34.765 22.573-55.878 22.573-21.114 0-40.945-8.044-55.878-22.573L200.071 188.098C181.406 169.967 156.675 160 130.427 160c-26.363 0-51.095 9.967-69.643 28.098C41.615 206.809 32.021 231.441 32 256c-.021 24.611 9.573 49.149 28.784 67.902C79.332 342.032 104.063 352 130.427 352c26.365 0 51.095-9.968 69.645-28.098l42.111-41.186-13.647-13.329-42.229 41.187c-14.932 14.529-34.764 22.573-55.879 22.573-21.113 0-40.944-8.044-55.876-22.573-30.799-30.14-30.799-79.13 0-109.148 14.932-14.529 34.763-22.573 55.876-22.573 21.115 0 40.947 8.044 55.879 22.573l125.52 122.477C330.49 342.032 355.222 352 381.47 352c26.363 0 51.095-9.968 69.643-28.098C470.361 305.23 479.985 280.6 480 256c.015-24.601-9.58-49.17-28.771-67.902z"
                    fill="currentColor" />
                </svg>
              </div>
              <div class="card-body text-center p-0">
                <h5 class="card-title text-uppercase">
                  <?php the_field('infinite_head','1497') ?>
                </h5>
                <p class="card-text my-3">
                  <?php the_field('infinite_description','1497') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-0">
              <div class="icon-wrapper m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="80" viewBox="0 0 24 24">
                  <path fill="currentColor"
                    d="M11.5 5.423V2.038h1v3.385zm5.496 2.289l-.683-.683l2.358-2.452l.727.733zm1.58 4.788v-1h3.386v1zM11.5 21.962v-3.366h1v3.366zM7.042 7.68L4.577 5.329l.752-.708L7.73 7.004zm11.623 11.742l-2.352-2.452l.677-.658l2.389 2.347zM2.038 12.5v-1h3.385v1zm3.272 6.923l-.689-.752l2.358-2.358l.36.349l.378.353zM12.005 17q-2.082 0-3.543-1.457Q7 14.086 7 12.005q0-2.082 1.457-3.543Q9.914 7 11.995 7q2.082 0 3.543 1.457Q17 9.914 17 11.995q0 2.082-1.457 3.543Q14.086 17 12.005 17M12 16q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                </svg>
              </div>
              <div class="card-body text-center p-0">
                <h5 class="card-title text-uppercase">
                  <?php the_field('sun_head','1497') ?>
                </h5>
                <p class="card-text my-3">
                  <?php the_field('sun_description','1497') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-0">
              <div class="icon-wrapper m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512">
                  <path
                    d="M465.4 247c-2.2-22-12.4-43-28.9-58.4-17.1-15.9-39.3-24.7-62.7-24.7-41.5 0-77.3 27.4-88.5 67-7-7-18.5-11.7-29.3-11.7s-22.3 4.7-29.3 11.7c-11.2-39.6-47-67-88.5-67-23.3 0-45.6 8.7-62.7 24.6C59 204 48.8 225 46.6 247H32v18h14.6c2.2 22 12.4 43 28.9 58.4 17.1 15.9 39.3 24.7 62.7 24.7 50.8 0 92.1-41.2 92.1-92v-.1c0-9.9 11.5-21.6 25.7-21.6s25.7 11.7 25.7 21.6v.1c0 50.8 41.3 92 92.1 92 23.3 0 45.6-8.7 62.7-24.7 16.5-15.4 26.7-36.5 28.9-58.5H480v-18h-14.6zm-91.6 86c-42.5 0-77-34.6-77-77 0-42.5 34.6-77 77-77 42.5 0 77 34.6 77 77 0 42.5-34.5 77-77 77zm-235.6 0c-42.5 0-77-34.6-77-77 0-42.5 34.6-77 77-77 42.5 0 77 34.6 77 77 0 42.5-34.5 77-77 77z"
                    fill="currentColor" />
                </svg>
              </div>
              <div class="card-body text-center p-0">
                <h5 class="card-title text-uppercase">
                  <?php the_field('goggles_head','1497') ?>
                </h5>
                <p class="card-text my-3">
                  <?php the_field('goggles_description','1497') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-0">
              <div class="icon-wrapper m-auto">
                <svg class="svg-icon" fill="currentColor" width="80" height="80" viewBox="0 0 1024 1024" version="1.1"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M896 576c-30.536 0-56.058 21.39-62.446 50l-118.008 0-60.362-181.792c-2.21-6.658-8.492-11.086-15.518-10.956-7.016 0.144-13.118 4.844-15.048 11.59L516.134 823.48 399.784 125.37c-1.248-7.48-7.574-13.056-15.152-13.358-7.618-0.278-14.322 4.764-16.156 12.122L243.496 626 64 626l0 32 192 0c7.348 0 13.75-5.004 15.526-12.132l109.37-439.182 115.322 691.946c1.23 7.376 7.406 12.918 14.874 13.344 0.306 0.018 0.614 0.026 0.918 0.026 7.098 0 13.398-4.7 15.374-11.594l113.744-396.992 47.69 143.626c2.174 6.542 8.292 10.958 15.186 10.958l130.584 0c7.78 26.578 32.322 46 61.416 46 35.348 0 64-28.654 64-64S931.348 576 896 576z" />
                </svg>
              </div>
              <div class="card-body text-center p-0">
                <h5 class="card-title text-uppercase">
                  <?php the_field('pulse_head','1497') ?>
                </h5>
                <p class="card-text my-3">
                  <?php the_field('pulse_description','1497') ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Share Section -->
    <section class="share-section">
      <div class="about-overlay text-white">
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <p class="text-uppercase mb-0">
              <?php the_field('share_head','1497') ?>
            </p>
            <button class="text-uppercase text-white worthie-btn-fill">Get started</button>
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