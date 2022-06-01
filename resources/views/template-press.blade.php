{{--
  Template Name: Press
--}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="row">
      @if($presspeater)
        @foreach($presspeater as $pr)
          <div class="col-md-6">
            <div class="press-item">
              <figure>
                <a href="{!! $pr['link'] !!}" target="_blank">
                  <img class="press-item-logo" src="{!! $pr['logo'] !!}" class="d-block w-100 lozad" alt="">
                </a>
              </figure>
              <p class="press-item-quote">{!! $pr['quote'] !!}</p>
              <p><img src="@asset('images/3-lines.svg')" alt=""></p>
              <p><a class="press-item-link" href="{!! $pr['link'] !!}" target="_blank">Read more ></a></p>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  @endwhile
@endsection

