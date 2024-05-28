<nav class="w-100" id="nav">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between py-4">
      <div class="logo">
        <a href="<?php echo site_url(); ?>" class="text-decoration-none">
          <!-- <img src="./images/W.png" class="h-100 w-100" alt=""> -->
          WORTHIE WORDS
        </a>
      </div>
      <!-- <ul class="navs list-unstyled d-flex align-items-center gap-4 mb-0 desktop-menu d-none d-lg-flex">
        <li class="nav-items">
          <a href="index.html" class="text-decoration-none text-white active">
            Home
          </a>
        </li>
        <li class="nav-items">
          <a href="/about.html" class="text-decoration-none text-white">
            About Us
          </a>
        </li>
        <li class="nav-items">
          <a href="#" class="text-decoration-none text-white">
            Contact Us
          </a>
        </li>
        <li class="nav-items">
          <a href="blog.html" class="text-decoration-none text-white">
            Blog
          </a>
        </li>
        <li class="nav-items">
          <a href="./services.html" class="text-decoration-none text-white">
            Services
          </a>
        </li>
      </ul> -->
      <?php wp_nav_menu(array(
              'theme_location'=>'primary-menu',
              'menu_class'=>'navs list-unstyled d-flex align-items-center gap-4 mb-0 desktop-menu d-none d-lg-flex'
          )) 
      ?>
    </div>
  </div>
</nav>