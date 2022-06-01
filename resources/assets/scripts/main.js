// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook, Houzz, and Instagram icons
import { faFacebook, faHouzz, faInstagram } from "@fortawesome/free-brands-svg-icons";

// add the imported icons to the library
library.add(faFacebook, faHouzz, faInstagram);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

// Google Fonts
window.WebFontConfig = {
  google: { families: [ 'Merriweather:300i,400i','Roboto+Condensed:400,700' ] },
};
(function() {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

$(document).ready(function(){
  var screenWidth = $(window).width();
  // if window width is smaller than 800 remove the autoplay attribute
  // from the video
  if (screenWidth < 960){
        $('video').removeAttr('autoplay');
  } else {
    $('video').attr('autoplay');
  }
  /* Load Modal on Subscibe click */
  $('#menu-primary-nav li.subscribe a').on('click', function(e) {
   e.preventDefault();
   $('#subscribeModal').modal('show');
  });
});
