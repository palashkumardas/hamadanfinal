@extends('base')
@section('content')
@section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp


  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about_service ">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
          <h3>Our Services</h3>
          <p>Hamadan as a group we provide many services to our community so that we can make our customer’s need for many different
          Travel & tourism, Consular, Money transfer an cargo services.</p>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('frontend_new/assets/img/services_img.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <h3>Below are the services we provide:</h3>
            <ul>
              <li class="d-flex align-items-center">
                <i class="bx bx-grid-alt"></i>
                <div style="margin-top: 10px;">
                  <h5>Quick Money transfer – Apps, Online, Shop</h5>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <i class="bx bx-grid-alt"></i>
                <div style="margin-top: 10px;">
                  <h5>Cheap Air Ticket - Cheap & reliable air ticket</h5>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <i class="bx bx-grid-alt"></i>
                <div style="margin-top: 10px;">
                  <h5>Hajj & Umrah Services – Tailor made packages</h5>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <i class="bx bx-grid-alt"></i>
                <div style="margin-top: 10px;">
                  <h5>Cargo & Courier – Send Cargo in a moment.</h5>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <i class="bx bx-grid-alt"></i>
                <div style="margin-top: 10px;">
                  <h5>Consular Services – All consular matter related with Bangladesh High Commission London</h5>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!--<section id="services" class="services">-->
    <!--  <div class="container" data-aos="fade-up">-->
    
    <!--    <div class="section-title">-->
    <!--      <h2>Services</h2>-->
    <!--      <h3>Why Choose Hamadan <span>Services?</span></h3>-->
    <!--    </div>-->
    
    <!--    <div class="row">-->
    <!--      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">-->
    <!--        <div class="icon-box">-->
    <!--          <div class="icon"><i class="bx bxl-dribbble"></i></div>-->
    <!--          <h4><a href="">Send Money</a></h4>-->
    <!--          <p>With so many options to choose from, it's quick and easy to send money. Many transfers come-->
    <!--            within a few minutes.</p>-->
    <!--        </div>-->
    <!--      </div>-->
    
    <!--      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">-->
    <!--        <div class="icon-box">-->
    <!--          <div class="icon"><i class="bx bx-file"></i></div>-->
    <!--          <h4><a href="">Reliable & Safety</a></h4>-->
    <!--          <p>Hamadan Online allows you to send your information and money with confidence. We make sure-->
    <!--            your money be safe 100%-->
    <!--            guarantee</p>-->
    <!--        </div>-->
    <!--      </div>-->
    
    <!--      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">-->
    <!--        <div class="icon-box">-->
    <!--          <div class="icon"><i class="bx bx-tachometer"></i></div>-->
    <!--          <h4><a href="">Conversions</a></h4>-->
    <!--          <p>Convert to any currencies anytime and save more with our highly competitive exchange-->
    <!--            rates</p>-->
    <!--        </div>-->
    <!--      </div>-->
    
    <!--      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">-->
    <!--        <div class="icon-box">-->
    <!--          <div class="icon"><i class="bx bx-world"></i></div>-->
    <!--          <h4><a href="">Convenient</a></h4>-->
    <!--          <p>Our global network includes well-known retailers and businesses in over 100 countries and-->
    <!--            territories, making it easy to-->
    <!--            collect cash for your recipient.</p>-->
    <!--        </div>-->
    <!--      </div>-->
    
    <!--      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">-->
    <!--        <div class="icon-box">-->
    <!--          <div class="icon"><i class="bx bx-slideshow"></i></div>-->
    <!--          <h4><a href="">Real Time Rate</a></h4>-->
    <!--          <p>We provide you the real time exchange rate for over 100+ currencies</p>-->
    <!--        </div>-->
    <!--      </div>-->
    
    <!--      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">-->
    <!--        <div class="icon-box">-->
    <!--          <div class="icon"><i class="bx bx-arch"></i></div>-->
    <!--          <h4><a href="">Low Cost</a></h4>-->
    <!--          <p>See our low fees and our best exchange rates up front, with no hidden costs</p>-->
    <!--        </div>-->
    <!--      </div>-->
    
    <!--    </div>-->
    
    <!--  </div>-->
    <!--</section>-->
    <!-- End Services Section -->

  </main><!-- End #main -->


@endsection