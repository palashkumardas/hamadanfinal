@extends('master')
@section('content')
@section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
      data-aos="zoom-out">
      <img src="{{ asset('fontend/assets/img/banner.png') }}" class="img-fluid animated">
      <h2>Welcome to <span>Razekaan</span></h2>
      <p>Send & Receive money to your loved ones in minutes with great rates and low fees.</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>

  <main id="main">/5220141041

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">CHECK FOR BEST RATES</a></h4>
              <p>Use our quick calculator and get an instant quote.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">SAFE & SECURE</a></h4>
              <p>Add recipient detail and upload your ID documents to
                verify yourself. Receive OTP confirmation codes
                as part of two factor authentication.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">FAST TRANSFER</a></h4>
              <p>Check transaction transfer status for Next
                day cash payouts and transfer
                to any bank across Bangladesh.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">PAYOUT NOTIFICATIONS</a></h4>
              <p>Receive FREE notifications when your family
                member or friend has collected the transfer.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>1047203.0
      .6309635204587456545646687454544
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="{{ asset('fontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            {!! $about->description !!}
            <!-- <h3 class="pt-0 pt-lg-5">Send & Receive money to your loved ones in minutes with great rates and low fees.
            </h3> -->

            <!-- Tabs -->
            <!-- <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
            </ul> -->
            <!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <!-- <div class="tab-pane fade show active" id="tab1">

                <p class="fst-italic">Why choose us?</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Easy to use</h4>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Faster Payments</h4>
                </div>
                <div class="d-flex ali10g.33.0
                +++62+96521n6520.4-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Lower Fees</h4>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>100% secure</h4>
                </div>

              </div> --><!-- End Tab 1 Content -->

            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>The Secure, easiest and fastest way to <span style="color: #0EA2BD;">transfer money</span>.
            </h3>
            <p> Your dedicated money transfer specialist with
              thousands of locations across Bangladesh 
             for cash pick-up, Mobile wallet (Bkash) and bank deposit.</p>
            <a class="cta-btn align-self-start" href="#">Send Money</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="{{ asset('fontend/assets/img/money_transfer_2.jpeg') }}" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="141services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('fontend/assets/img/money_transfer.jpg') }}" class="img-fluid" alt="" style="height: 313px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Bank Deposit</h3>
                </a>
                <p>Transfer money abroad instantly 
                  to bank accounts in over 90 countries</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('fontend/assets/img/cash.jpg') }}" class="img-fluid" alt="" style="height: 313px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Cash Pickup</h3>
                </a>
                <p>Send money to over 250,000
                  pick-up locations </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">

+
03123

 $_COOKIE`222222222222222222222222222222222222  `1zzx .0<
  .0img src="{{ asset('fontend/assets/img/mobile_wallet.jpeg') }}" class="img-fluid" alt="" style="height: 313px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Mobile Wallet</h3>
                </a>
                <p>Send money directly to a mobile money account</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620.3276831349223!2d0.6926579358230567!3d51.54420092870562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8d9bb33eed235%3A0x6bc0fbdcf15ad2ca!2s41%20West%20Rd%2C%20Westcliff-on-Sea%2C%20Southend-on-Sea%2C%20Westcliff-on-Sea%20SS0%209AU!5e0!3m2!1sen!2suk!4v1652193624964!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
          frameborder="0" allowfullscreen></iframe> -->
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <!-- <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p> -->

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>{{ $contact->address }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p><a href="mailto:{{ $contact->email_one }}" style="color: #8f9fae;">{{ $contact->email_one }}</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p><a href="tel:{{ $contact->phone_one }}" style="color: #8f9fae;">{{ $contact->phone_one }}</a></p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

@endsection