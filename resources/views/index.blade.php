@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="row one-two">
    @if (!have_posts())
      <div class="alert">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
