<!-- Footer  -->
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4">
        <span class="logo-text footer-logo text-uppercase"><i class="fas fa-utensils"></i> FOOD HUB</span>
        <br>
        <p>Welcome to Food Hub, the go-to online platform for all your culinary needs. Whether you're a
          passionate foodie, an aspiring home cook, or simply looking for a new dining experience, Food
          Hub has got you covered. </p>
        <div class="opening d-flex">
          <span><i class="fas fa-clock"></i></span>
          <div>
            <b>Opening Hours</b>
            <p>Mon-Sun</p>
            <p>7am - 10pm</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-2">
        <h4>About us</h4>
        <div class="footer-link">
          <a href="#">Menu</a>
          <a href="#">About us</a>
          <a href="#">Features</a>
          <a href="#">FAQs</a>
        </div>
      </div>
      <div class="col-12 col-sm-2">
        <h4>Company</h4>
        <div class="footer-link">
          <a href="#">Why us</a>
          <a href="#">Gallery</a>
          <a href="#">Partner with us</a>
          <a href="#">Feedback</a>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <h4>Contact us</h4>
        <div class="contact-footer">
          <p>(44) 555-0122</p>
          <p>(44) 555-0122</p>
          <p>customerservice@email.com</p>
          <p>First Floor Flat, 115A Coldharbour Road, Birmingham, B11AB</p>
        </div>
        <div class="social">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End Footer  -->

</div>

<!-- jquery -->
<script src="{{ asset('frontend/assets/js/jquery-3.6.0.js') }}"></script>
<!-- isotope js -->
<!-- bootstrap js -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('frontend/assets/js/vue.global.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('frontend/assets/js/form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.js') }}"></script>
<script>
  var userData = @json(auth()->user());
</script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>

@yield('body-scripts')

</body>

</html>
