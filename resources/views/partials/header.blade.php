<header class="banner">
  <nav class="navbar navbar-expand-lg navbar-light at-rest" role="navigation">
    <div class="container">
      <a class="brand" href="{{ home_url('/') }}"><img class="logo" src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
      <nav class="collapse navbar-collapse" id="primary-nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container'=> false, 'menu_class' => 'nav navbar-nav ml-auto', 'walker' => new \App\wp_bootstrap4_navwalker()]) !!}
        @endif
      </nav>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggle-icon">
          <img src="@asset('images/menu-toggle.svg')" alt="Toggle Menu">
        </span>
      </button>
    </div>
  </nav>
</header>
<div class="bg-top"></div>
