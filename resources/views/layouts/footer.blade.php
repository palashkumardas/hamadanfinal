  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @php $contact = App\Models\Contact::get()->first() @endphp

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <!-- <h3>Razekaan</h3> -->
              <a href="{{ url('/') }}"><img src="{{ asset('fontend/assets/img/razekkan_white_logo.png') }}" alt="Razikeen" class="img-fluid" width="150"></a><br><br>
              <p>
                {{ $contact->address }}<br><br>
                <strong>Phone:</strong> <a href="tel:{{ $contact->phone_one }}" style="color: #fff;">{{ $contact->phone_one }}</a><br>
                <strong>Email:</strong> <a href="mailto:{{ $contact->email_one }}" style="color: #fff;">{{ $contact->email_one }}</a><br>
              </p>
              <div class="my-5">
                <p><img src="{{ asset('fontend/assets/img/payment_method.png') }}" alt="" height="40"></p>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('terms') }}">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('privacy') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Bank Transfer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Cash Pickup</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Mobile Wallet</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

            <div>
              <p><strong>Powered By</strong> <img src="{{ asset('fontend/assets/img/logo-white.svg') }}" alt="" class="img-fluid my-3" width="200" alt="Worldwide"></p>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Razekaan</span></strong>. All Rights Reserved
          </div>
        </div>
        <div>
          <img src="" alt="">
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="{{ $contact->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="{{ $contact->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{ $contact->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> -->
          <a href="{{ $contact->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('fontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('fontend/assets/js/main.js')}}"></script>

</body>

</html>