<footer class="footer-section text-start text-lg-start text-creame">
  <div class="w-100 footer-bg py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-12 col-lg-3">
          <h5 class="footer-head text-uppercase fw-normal mb-3 footer-collection-head">
            Newsletter
          </h5>
          <p class="footer-detail">
            Subscribe to receive updates, access to exclusive deals, and more.
          </p>
          <div class="footer-email">
            
          </div>
          <div class="footer-navs d-flex align-items-center gap-3 mt-3">
            <ul class="share-links d-flex align-items-center gap-3 flex-wrap ps-0">
              <li class="share-link rounded-circle cursor-pointer d-flex align-items-center justify-content-center">
                <a href="<?php the_field('footer_facebook_link','1499') ?>" class="text-white">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
              <li class="share-link rounded-circle cursor-pointer d-flex align-items-center justify-content-center">
                <a href="<?php the_field('footer_twitter_link','1499') ?>" class="text-white">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li class="share-link rounded-circle cursor-pointer d-flex align-items-center justify-content-center">
                <a href="<?php the_field('footer_pinterest_link','1499') ?>" class="text-white">
                  <i class="fa-brands fa-pinterest"></i>
                </a>
              </li>
              <li class="share-link rounded-circle cursor-pointer d-flex align-items-center justify-content-center">
                <a href="<?php the_field('footer_insta_link','1499') ?>" class="text-white">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="footer-wrapper w-100 w-fit mt-4 mt-lg-0">
            <?php dynamic_sidebar('footer_categories_menus') ?>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="footer-wrapper w-100 w-fit mt-4 mt-lg-0">
            <?php dynamic_sidebar('footer_menus') ?>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="mt-4 mt-lg-0">
            <h5 class="footer-head text-uppercase fw-normal mb-3">
              About the shop
            </h5>
            <ul class="list-unstyled">
              <li>
                At Worthie Words, we craft your brand's voice with such finesse, even the grammar police give us high fives!
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>