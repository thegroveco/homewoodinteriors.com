{{--
  Template Name: Portfolio Landing
--}}

@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 portfolio-split" style="background-image: url(@asset('images/portfolio-home.jpg');">
      <div class="page-header">
        <h1>Interiors For</h1>
        <h2>The Home</h2>
        <p><a class="btn btn-light" href="/portfolio/home-interiors">View Projects</a></p>
      </div>
    </div>
    <div class="col-md-6 portfolio-split" style="background-image: url(@asset('images/portfolio-business.jpg');">
      <div class="page-header">
        <h1>Interiors For</h1>
        <h2>Business</h2>
        <p><a class="btn btn-light" href="/portfolio/interiors-for-business">View Projects</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
