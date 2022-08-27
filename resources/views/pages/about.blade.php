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
      <h2>About Us</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>About Us</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- <section class="inner-page">
  <div class="container">
    <p>
      Example About Us template
    </p>
  </div>
</section> -->
<!-- ======= About Section ======= -->
<section id="about" class="about ">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About</h2>
      <h3>Find Out More <span>About Us</span></h3>
      <!--<p>Our aim is to provide fast and secure money transfers with online as well as shop to Bangladesh.</p>-->
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('frontend_new/assets/img/about.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
        data-aos-delay="100">
        <!--<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>-->
        <p class="fst-italic">
          {!! $about->description !!}
        </p>
        <!--<ul>-->
        <!--  <li>-->
        <!--    <i class="bx bx-store-alt"></i>-->
        <!--    <div>-->
        <!--      <h5>Ullamco laboris nisi ut aliquip consequat</h5>-->
        <!--      <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>-->
        <!--    </div>-->
        <!--  </li>-->
        <!--  <li>-->
        <!--    <i class="bx bx-images"></i>-->
        <!--    <div>-->
        <!--      <h5>Magnam soluta odio exercitationem reprehenderi</h5>-->
        <!--      <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>-->
        <!--    </div>-->
        <!--  </li>-->
        <!--</ul>-->
        <!--<p>-->
        <!--  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
        <!--  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
        <!--  culpa qui officia deserunt mollit anim id est laborum-->
        <!--</p>-->
      </div>
    </div>

  </div>
</section><!-- End About Section -->

</main><!-- End #main -->


@endsection