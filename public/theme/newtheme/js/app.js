// Initialize Wow
new WOW().init()

$('.singleProduct__img').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  vertical: true,
  verticalSwiping: true,
  autoplay: true,
  asNavFor: '.singleProduct__pictures',
})
$('.singleProduct__pictures').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.singleProduct__img',
  dots: false,
  arrows: false,
  focusOnSelect: true,
  vertical: true,
})

// Product Slider JS
$('.businessCards').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
})

$('.collectionSlider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  arrow: false,
  dots: true,
})

// function updateTimer() {
//   future = Date.parse("april 23, 2023 12:30:00");
//   now = new Date();
//   diff = future - now;

//   days = Math.floor(diff / (1000 * 60 * 60 * 24));
//   hours = Math.floor(diff / (1000 * 60 * 60));
//   mins = Math.floor(diff / (1000 * 60));
//   secs = Math.floor(diff / 1000);

//   d = days;
//   h = hours - days * 24;
//   m = mins - hours * 60;
//   s = secs - mins * 60;

//   document.getElementById("timer").innerHTML =
//     "<div>" +
//     d +
//     "<span>days</span></div>" +
//     "<div>" +
//     h +
//     "<span>hours</span></div>" +
//     "<div>" +
//     m +
//     "<span>minutes</span></div>" +
//     "<div>" +
//     s +
//     "<span>seconds</span></div>";
// }
// setInterval("updateTimer()", 1000);
