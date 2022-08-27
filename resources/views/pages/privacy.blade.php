@extends('base')
@section('content')
@section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp
    @php $privacy = App\Models\PrivacyPolicy::get()->first() @endphp
     


  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Privacy policy</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Privacy policy</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Privacy policy</h2>
           <h3>Privacy Policy </h3>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div>
              <!-- Privacy policy Details -->
              <p>{!! $privacy->description !!}</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->


@endsection