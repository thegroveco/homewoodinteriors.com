<div class="col">
  <article @php post_class() @endphp style="background-image: url( {{ the_post_thumbnail_url() }} ); ">
    <header>
      <h2 class="entry-title">{!! get_the_title() !!}</h2>
      <a class="view-posts" href="@php the_permalink() @endphp">View Gallery &raquo;</a>
    </header>
  </article>
</div>
