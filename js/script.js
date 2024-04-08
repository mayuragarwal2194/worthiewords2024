function aboutusSlider() {
  $('.aboutus-slider').slick({
    dots: true,
    infinite: false,
    arrow: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
}

function activeNavTab() {
  var navs = document.querySelectorAll('.nav-items a');

  navs.forEach(link => {
    link.addEventListener('click', function (event) {
      // Prevent the default link behavior (e.g., navigating to a new page)
      // event.preventDefault();

      // Remove 'active' class from all links
      navs.forEach(otherLink => {
        otherLink.classList.remove('active');
      });

      // Add 'active' class to the clicked link
      link.classList.add('active');
    });
  });
}
activeNavTab();

function blogSlider() {
  $('.blog-cards-wrapper').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
}

aboutusSlider();
activeNavTab();
blogSlider();