<?php 
  // Template Name: Contact Us Template
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
        <div class="contact-banner-wrapper">
          <div class="about-overlay d-flex align-items-center justify-content-center text-white text-uppercase">
            <h2 class="mb-0">Contact Us</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Section -->
    <section class="aboutus-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="contact-left position-sticky">
              <h2 class="section-head text-uppercase mb-4">
                <?php the_field('contact_us_head','1499') ?>
              </h2>
              <p class="mb-0 pe-5 me-5">
                <?php the_field('contact_us_description','1499') ?>
              </p>
              <ul class="list-unstyled mt-4 pt-4">
                <li class="d-flex align-items-center gap-2 mb-3">
                  <div class="contact-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                    </svg>
                  </div>
                  <span>  
                    <?php the_field('contact_us_address','1499') ?>
                  </span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-3">
                  <div class="contact-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M22 8.608v8.142a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0zM5.25 4h13.5a3.25 3.25 0 0 1 3.234 2.924L12 12.154l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.919zh13.5z" />
                    </svg>
                  </div>
                   <span>
                    <?php the_field('contact_us_email','1499') ?>
                   </span>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <div class="contact-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                    </svg>
                  </div>
                  <span> 
                    <?php the_field('contact_us_mobile_number','1499') ?>
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-7">
            <section class="comment-section">
              <div class="container">
                <div class="comment-wrapper w-75 m-auto">
                  <?php/* comment_form();*/ ?>
                  <?php comments_template(); ?>
                </div>
              </div>
            </section>
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