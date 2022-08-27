  <!-- ======= Footer ======= -->
  <footer id="footer">

      <div class="footer-newsletter">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <h4>Join Our Newsletter</h4>
                      <p>your are most welcome to our newsletter signup.</p>
                      <form action="https://worldwide.hamadaninternational.co.uk/" method="get">
                          <input type="email" name="email"><input type="submit" value="Subscribe">
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-3 col-md-6 footer-contact">
                      <a href="{{url('/')}}" class="logo"><img
                              src="{{ asset('frontend_new/assets/img/hamadam_logo.png')}}" alt="" class="img-fluid mb-4"
                              width="200px"></a>
                      <p>
                          {{-- {{ $contact->address }}<br><br>
                          <strong>Phone:</strong> {{ $contact->phone_one }}<br>
                          <strong>Email:</strong> {{ $contact->email_one }}<br> --}}
                          Hamadan Express LTD, a company incorporated in England with registered number 13794253 whose
                          registered address is at
                          214 Whitechapel Road London E1 1BJ. The company is registered in Financial Conduct Authority
                          (“FCA”) as PSD agent with
                          FRN 967703 under the Payment Services Directive 2 (PSD2) and can act on behalf of his
                          principal for remittance services.
                      </p>
                  </div>

                  <div class="col footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about/')}}">About us</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services/')}}">Services</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/terms-and-conditions/')}}">Terms of
                                  service</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/privacy-policy/')}}">Privacy
                                  policy</a></li>
                      </ul>
                  </div>

                  <div class="col footer-links">
                      <h4>Our Services</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services/')}}">Quick Money
                                  transfer</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services/')}}">Cheap Air Ticket</a>
                          </li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services/')}}">Hajj & Umrah
                                  Services</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services/')}}">Cargo & Courier</a>
                          </li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services/')}}">Consular Services</a>
                          </li>
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">

                      <div class="mt-3">
                          <div class="row align-self-center">
                              <div class="col-md-4 d-flex align-self-center">
                                  <h4 class="m-0 p-0">Powered By</h4>
                              </div>
                              <div class="col-md-8">
                                  <a href=""><img src="{{ asset('frontend_new/assets/img/logo-white.svg')}}" alt=""
                                          class="img-fluid worldwide"></a>
                              </div>
                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </div>

      <div class="container">
          <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center py-4">
              <div class="copyright">
                  &copy; Copyright <strong><span>Hamadan Express LTD</span></strong>. All Rights Reserved
              </div>
              <div class="credits footer-links">
                  <div class="social-links">
                      <img src="{{ asset('frontend_new/assets/img/payment_method.png')}}" class="img-fluid" alt=""
                          width="300px">
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend_new/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('frontend_new/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend_new/assets/js/main.js')}}"></script>

  </body>

  </html>
