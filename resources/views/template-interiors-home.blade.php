{{--
  Template Name: Projects - Home
--}}
@php
$args = array('post_type' => 'project', 'category_name'    => 'home-interiors', 'posts_per_page'=>'-1');
$loop = new WP_Query($args);
@endphp

@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="row one-two">
    @while($loop->have_posts()) @php($loop->the_post())
      @include('projects.project-item')
    @endwhile
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
