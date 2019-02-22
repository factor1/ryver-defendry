<?php // Close main ?>
</main>

<footer class="container footer">
  <div class="row">
    <div class="col-3 md-col-6 sm-col-12 stretch">
      <div class="row implementation">
        <div class="col-12 sm-col-12 col-centered columns text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/implementation.svg" />
        </div>
        <div class="col-12 sm-col-12 columns text-center">
          <p>Become an Implementation Partner</p>
        </div>
      </div>
      <div class="text-center">
        <?php $link = is_page_template('templates/page-partner.php') ? '#learn-more' : esc_url(home_url()) . '/partner-program'; ?>
        <a class="button button--primary" href="<?php echo $link; ?>">Learn More</a>
      </div>
    </div>
    <div class="col-3 md-col-6 sm-col-12 stretch footer__social-links">
      <h6>Stay Connected</h6>
      <a href="https://fb.me/IoTalkApp" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" />
      </a>
      <a href="https://twitter.com/IoTalkApp" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" />
      </a>
      <a href="https://www.linkedin.com/company/iotalk" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" />
      </a>
      <a href="https://www.youtube.com/channel/UCV8_TK0fXQMQ3yTR8Vu2wVw" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg" />
      </a>

      <!-- Begin Mailchimp Signup Form -->
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
      <style type="text/css">
      	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
      	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
      	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <div id="mc_embed_signup">
      <form action="https://ryver.us5.list-manage.com/subscribe/post?u=bbfac7d1353c0b75fa67a2cab&amp;id=9be6003dd5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">
        	   <input type="email" value="" name="EMAIL" placeholder="Your Email..." class="required email" id="mce-EMAIL">
          </div>
        	<div id="mce-responses" class="clear">
        		<div class="response" id="mce-error-response" style="display:none"></div>
        		<div class="response" id="mce-success-response" style="display:none"></div>
        	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bbfac7d1353c0b75fa67a2cab_9be6003dd5" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button button--primary"></div>
        </div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->

    </div>
    <div class="col-3 md-col-6 sm-col-12 stretch footer__contact">
      <h6>Get in Touch</h6>
      <div class="row" style="display:none;">
        <div class="col-2 sm-col-2 columns stretch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" />
        </div>
        <div class="col-10 sm-col-10 col-no-pad columns stretch">
          <a href="tel:1-800-543-3456">1-800-543-3456</a>
        </div>
      </div>
      <div class="row">
        <div class="col-2 sm-col-2 columns stretch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope.svg" />
        </div>
        <div class="col-10 sm-col-10 col-no-pad columns stretch">
          <a href="mailto:info@defendry.com">info@defendry.com</a>
        </div>
      </div>
      <div class="row">
        <div class="col-2 sm-col-2 columns stretch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/address.svg" />
        </div>
        <div class="col-10 sm-col-10 col-no-pad columns stretch">
          <a href="https://www.google.com/maps/place/14300+N+Northsight+Blvd+%23105,+Scottsdale,+AZ+85260/data=!4m2!3m1!1s0x872b75b21e88f1ef:0x48559be651cede08?sa=X&ved=2ahUKEwix6KHT8OXdAhVrIjQIHT7lDVcQ8gEwAHoECAAQAQ" target="_blank">14300 N Northsight Blvd #105<br>Scottsdale, AZ 85260</a>
        </div>
      </div>
    </div>
    <div class="col-3 md-col-6 sm-col-12 stretch footer__logo">
      <a href="/" class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/defendry-logo-dark.svg" />
      </a>
      <p class="text-center">
        Next Generation Surveillance <span>with ART<sup>TM</sup></span>
      </p>

      <a class="text-center" href="https://iotalk.com/" target="_blank">
        <img class="ryver-power" src="<?php echo get_template_directory_uri(); ?>/assets/img/avnet-partnership.svg" />
      </a>
    </div>
  </div>
  <div class="container footer--bottom-row">
    <div class="row">
      <div class="col-6 sm-col-11 col-centered">
        <ul>
          <?php //<li>
            //<a href="/terms-of-service">Terms of Service</a>
          //</li> ?>
          <li>
            <a href="/privacy-policy">Privacy Policy</a>
          </li>
        </ul>
      </div>
      <div class="col-6 sm-col-11 col-centered copywright-wrap">
        <h5 class="copyright">&copy; <?php echo date("Y"); ?> Defendry. All Rights Reserved.</h5>
      </div>
    </div>
  </div>
</footer>

<?php get_template_part('parts/global/remodal'); ?>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.0/tilt.jquery.min.js"></script>
</body>
</html>
