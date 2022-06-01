<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="{{ home_url('/') }}"><img class="logo-footer" src="@asset('images/logo-reversed.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-6">
            @php dynamic_sidebar('sidebar-footer-1') @endphp
          </div>
          <div class="col-lg-6">
            @php dynamic_sidebar('sidebar-footer-2') @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Modal -->
<div class="modal fade subscribe-modal" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
	  </button>
      <div class="modal-body">
      <h5>Subscribe to our email updates</h5>
      <p class="required">* Required Fields</p>
	  <!-- Begin Mailchimp Signup Form -->
	<div id="mc_embed_signup">
		<form action="https://homewoodinteriors.us12.list-manage.com/subscribe/post?u=563c17c0ca68d47471d7492f4&amp;id=76be5896f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
				<div class="mc-field-group">
					<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name*">
				</div>
				<div class="mc-field-group">
					<input type="text" value="" name="LNAME" class="required" id="mce-LNAME" placeholder="Last Name*">
				</div>
				<div class="mc-field-group">
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email*">
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true">
				    <input type="text" name="b_563c17c0ca68d47471d7492f4_76be5896f3" tabindex="-1" value="">
				</div>
			    <div class="clear">
				    <input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
		    </div>
		</form>
	</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

	<!--End mc_embed_signup-->
      </div>
    </div>
  </div>
</div>