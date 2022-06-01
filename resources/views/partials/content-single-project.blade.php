<article @php post_class() @endphp>
  <header class="page-header">
    <div class="entry-content">
      <h1 class="entry-title">Project</h1>
      <h2>{!! get_the_title() !!}</h2>
    </div>
  </header>

  <div id="modal-ready">
    <div class="row">
      <div class="col-md-8">
        <div class="entry-content">
          <div id="project-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              @if($repeater)
                @foreach($repeater as $r)
                  <div class="carousel-item">
                    <img src="{!! $r['project_image'] !!}" class="d-block w-100 lozad" alt="">
                  </div>
                @endforeach
              @endif
            </div>
            <a class="carousel-control-prev" href="#project-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#project-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="row gallery-nav">
            <div class="col-6">
              <a class="prev-photo" href="#project-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="">Previous Photo</span>
              </a>
            </div>
            <div class="col-6">
              <a class="next-photo" href="#project-carousel" role="button" data-slide="next">
                <span class="">Next Photo</span> <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2>@php the_title() @endphp</h2>
        @php the_content() @endphp
      </div>
    </div>
    <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery('#project-carousel').find('.carousel-item').first().addClass('active');
      });
    </script>
  </div>
</article>
