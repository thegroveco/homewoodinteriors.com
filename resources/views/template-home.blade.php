{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header-home')
  <div class="container home-content">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-page')
    @endwhile
  </div>
  @include('partials.contact-form')
@endsection
