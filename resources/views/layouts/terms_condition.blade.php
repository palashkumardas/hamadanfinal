@extends('master')
@section('content')
@section('title','Terms & Conditions')
  <main id="main" style="margin-top: 80px;">

   <div class="container">
      <h1><center> Terms & Conditions</center></h1>
      
      <p>{!! $terms->description !!}</p>

   </div>

  </main><!-- End #main -->

@endsection