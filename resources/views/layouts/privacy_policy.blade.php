@extends('master')
@section('content')
@section('title','Terms & Conditions')
  <main id="main" style="margin-top: 80px;">

   <div class="container">
      <h1><center> Privacy Policy </center></h1>
      
      <p>{!! $privacy->description !!}</p>

   </div>

  </main><!-- End #main -->

@endsection