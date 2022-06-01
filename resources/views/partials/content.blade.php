<div class="col">
  <article @php post_class('lozad') @endphp data-background-image="{{ the_post_thumbnail_url() }}">
    <header>
      <h2 class="entry-title">{!! get_the_title() !!}</h2>
      <a class="view-gallery" href="@php the_permalink() @endphp">View Post &raquo;</a>
    </header>
  </article>
</div>
