<!-- Start Go Top Area -->
<div class="go-top">
  <i class="ri-arrow-up-s-fill"></i>
  <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Min JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{url('website-assets/js/jquery.min.js?v=1.0')}}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{url('website-assets/js/bootstrap.bundle.min.js?v=1.0')}}"></script>
<!-- Meanmenu Min JS -->
<script src="{{url('website-assets/js/meanmenu.min.js?v=1.0')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{url('website-assets/js/owl.carousel.min.js?v=1.0')}}"></script>
<!-- Wow Min JS -->
<script src="{{url('website-assets/js/wow.min.js?v=1.0')}}"></script>
<!-- Appear Min JS -->
<script src="{{url('website-assets/js/appear.min.js?v=1.0')}}"></script>
<!-- Odometer Min JS -->
<script src="{{url('website-assets/js/odometer.min.js?v=1.0')}}"></script>
<!-- Jarallax Min JS -->
<script src="{{url('website-assets/js/jarallax.min.js?v=1.0')}}"></script>
<!-- Bootstrap Datepicker Min JS -->
<script src="{{url('website-assets/js/bootstrap-datepicker.min.js?v=1.0')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{url('website-assets/js/magnific-popup.min.js?v=1.0')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{url('website-assets/js/form-validator.min.js?v=1.0')}}"></script>
<!-- Contact JS -->
<script src="{{url('website-assets/js/contact-form-script.js?v=1.0')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{url('website-assets/js/ajaxchimp.min.js?v=1.0')}}"></script>
<!-- Custom JS -->
<script src="{{url('website-assets/js/custom.js?v=1.0')}}"></script>

<script>
  var owl = $(".banner-slider");
      owl.owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        margin: 0,
        padding:0,
        autoplay: false,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
      });
      $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [1000]);
      });
      $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
      });
</script>
<script>
  const applicationLinkBtn =document.querySelector("#applicationLink");
  const popup = document.querySelector(".popup");
  const close = document.querySelector(".close");
  window.onload = function () {
  setTimeout(function () {
  popup.style.display = "block";
  setInterval(Anim, 10000000);
  function Anim() {
  popup.style.display = "none";
  }
  }, 2000);
  };
  applicationLinkBtn.addEventListener("click",() =>{
popup.style.display = "block";
  });
  close.addEventListener("click", () => {
  popup.style.display = "none";
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
if ({{ session('popup') ? 'true' : 'false' }}) {
var popup = document.getElementById('enquiryPopup');
popup.style.display = 'block';

var popupMessage = document.getElementById('popupMessage');
if (popupMessage) {
popupMessage.style.display = 'block';
setTimeout(function() {
popupMessage.style.display = 'none';
}, 5000); // Hide the message after 5 seconds
}
}
});
</script>