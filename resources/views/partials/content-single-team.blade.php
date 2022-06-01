<article @php post_class() @endphp>
  <header class="page-header">
    <div class="entry-content">
      <h1 class="entry-title">Team</h1>
      <h2>{!! get_the_title() !!}</h2>
    </div>
  </header>
  <div id="modal-ready">
    <div class="row">
      <div class="col-md-6">
        <div class="entry-content">
          {{ the_post_thumbnail() }}
        </div>
      </div>
      <div class="col-md-6">
        <h2>@php the_title() @endphp</h2>
        @php the_content() @endphp
      </div>
    </div>
  </div>
</article>
