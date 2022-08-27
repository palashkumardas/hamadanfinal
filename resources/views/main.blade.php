@extends('base')
@section('content')
@section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp
<style>
  .mobile{
    height:395px;
    width:300px;
  }
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Hamadan</span></h1>
      <h2>The Fastest & Most Trusted Way to Send Money Worldwide</h2>
      <div class="d-flex">
        <a href="http://worldwide.hamadaninternational.co.uk/" class="btn-get-started scrollto">Get Started</a>
        <!--<a href="#" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>-->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3 style="font-size: 42px;">Send Money with Hamadan <br>in <span>3 simple steps</span></h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><img src="{{ asset('frontend_new/assets/img/icon/open An account-01.png')}}"></div>
                        <h4 class="title"><a href="">Open an Account</a></h4>
                        <p class="description">Opening a Hamadan account is fast, free and easy - just enter your
                            details, verify your identity and you’re all set</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><img src="{{ asset('frontend_new/assets/img/icon/Transfer Money-01.png')}}"></div>
                        <h4 class="title"><a href="">Transfer Money</a></h4>
                        <p class="description">We are multiple secure options to send money back home: bank transfer,
                            mobile wallet, bank deposit, instant, low-cost,
                            whatever works best for you</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><img src="{{ asset('frontend_new/assets/img/icon/Time To Wait-01.png')}}"></div>
                        <h4 class="title"><a href="">Time to wait</a></h4>
                        <p class="description">That’s it! Most fund arrive instantly, with notifications keeping you
                            updated for total peace of mind</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('frontend_new/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <p class="fst-italic">{!! $about->description !!}</p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Why choose Hamadan <span>Services?</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="mb-4"><img src="{{ asset('frontend_new/assets/img/icon/Send Money-01.png')}}"></div>
              <h4><a href="">Send Money</a></h4>
              <p>With so many options to choose from, it's quick and easy to send money. Many transfers come
                within a few minutes.</p>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="mb-4"><img src="{{ asset('frontend_new/assets/img/icon/Reliable and Safety-01.png')}}"></div>
              <h4><a href="">Reliable & Safety</a></h4>
              <p>Hamadan Online allows you to send your information and money with confidence. We make sure
                your money be safe 100%
                guarantee</p>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="mb-4"><img src="{{ asset('frontend_new/assets/img/icon/low cost-01.png')}}"></div>
              <h4><a href="">Low Cost</a></h4>
              <p>See our low fees and our best exchange rates up front, with no hidden costs</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->
 <!--start another feature section-->
 <section class="business_section">
  <div class="container">
      <div class="row gx-4 gy-5 align-items-center">
          <div class="col-md-6 col-12 order-2 order-md-1">
            <div data-aos="fade-up" data-aos-delay="100">
              <h3>Mobile app</h3>
              <p class="mt-4 mb-4">We developed a mobile app that will allow you to send money in the comfort of your own home. 
                  </p>
                  <p>
                      The interface is user-friendly which will allow you to navigate the features with ease.The goal is to help you execute tasks or enjoy our services remotely and conveniently.
                  </p>
            </div>
              <div class="mt-5" data-aos="fade-right" data-aos-delay="100">
                  <img class="img-fluid me-5" src="{{asset('frontend_new/assets/img/playstore.png')}}" alt="">
                  <img class="img-fluid " src="{{asset('frontend_new/assets/img/apple.png')}}" alt="">
              </div>
          </div>
          <div class="col-md-6 col-12 tex-start order-1 order-md-2" data-aos="fade-left" data-aos-delay="100">
              <img class="img-fluid d-block m-auto mobile" src="{{asset('frontend_new/assets/img/Mobile.png')}}" alt="">
          </div>
      </div>
      <div class="row gx-4 gy-5 align-items-center mt-5">
          <div class="col-md-6 col-12 text-start" data-aos="fade-right" data-aos-delay="100">
              <img class="img-fluid " src="{{asset('frontend_new/assets/img/Laptop.png')}}" alt="">
          </div>
          <div class="col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
              <h3 class="mb-4">Website</h3>
              <p>We created an interactive and dynamic website where you can make transactions locally and internationally.We also customize the website design to cater to your specific needs and requirements.The aim is to fuse aesthetics and functionality in one.</p>
          </div>
      </div>
      <div class="row gx-4 gy-5 align-items-center mt-5">
          <div class="col-md-6 col-12 order-2 order-md-1" data-aos="fade-up" data-aos-delay="100">
              <h3>shop</h3>
              <p class="mb-4 mt-4">Some customers might not be comfortable making the transaction themselves,so we also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time.</p>
              <p>The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p>
          </div>
          <div class="col-md-6 col-12 text-md-end tex-start order-1 order-md-2" data-aos="fade-left" data-aos-delay="100">
              <img class="img-fluid " src="{{asset('frontend_new/assets/img/Shop.png')}}" alt="">
          </div>
      </div>
  </div>
</section>
<!-- end of feature section -->


  </main><!-- End #main -->

@endsection