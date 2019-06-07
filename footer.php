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
        <?php $link = esc_url(home_url()) . '/partner-program'; ?>
        <a class="button button--primary" href="<?php echo $link; ?>">Learn More</a>
      </div>
    </div>
    <div class="col-3 md-col-6 sm-col-12 stretch sm-text-center footer__social-links">
      <h6 class="sm-text-center">Stay Connected</h6>
      <a href="https://fb.me/DefendryART" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Defendry Facebook" />
      </a>
      <a href="https://twitter.com/DefendryART" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="Defendry Twitter" />
      </a>
      <a href="https://www.linkedin.com/company/defendry/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="Defendry LinkedIn" />
      </a>
      <a href="https://www.youtube.com/channel/UCBLG_w4PHmPfFiJTUdteo_Q?" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg" alt="Defendry Youtube" />
      </a>

      <div id="mc_embed_signup">
        <?php echo do_shortcode( '[gravityform id=3 title=false description=false ajax=true]' ); ?>
      </div>

    </div>
    <div class="col-3 md-col-6 sm-col-12 sm-text-center stretch footer__contact">
      <h6>Get in Touch</h6>
      <div class="row" style="display:none;">
        <div class="col-2 sm-col-2 columns stretch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" />
        </div>
        <div class="col-10 sm-col-10 col-no-pad columns stretch">
          <a href="tel:1-800-543-3456">1-800-543-3456</a>
        </div>
      </div>
      <div class="row sm-middle-align">
        <div class="col-2 sm-col-4 columns stretch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope.svg" />
        </div>
        <div class="col-10 sm-col-8 sm-text-left col-no-pad columns stretch">
          <a href="mailto:&#115;&#097;&#108;&#101;&#115;&#064;&#100;&#101;&#102;&#101;&#110;&#100;&#114;&#121;&#046;&#099;&#111;&#109;">&#115;&#097;&#108;&#101;&#115;&#064;&#100;&#101;&#102;&#101;&#110;&#100;&#114;&#121;&#046;&#099;&#111;&#109;</a>
        </div>
      </div>
      <div class="row sm-middle-align">
        <div class="col-2 sm-col-4 columns stretch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/address.svg" />
        </div>
        <div class="col-10 sm-col-8 sm-text-left col-no-pad columns stretch">
          <a href="https://www.google.com/maps/place/14300+N+Northsight+Blvd+%23105,+Scottsdale,+AZ+85260/data=!4m2!3m1!1s0x872b75b21e88f1ef:0x48559be651cede08?sa=X&ved=2ahUKEwix6KHT8OXdAhVrIjQIHT7lDVcQ8gEwAHoECAAQAQ" target="_blank">14300 N Northsight Blvd #105<br>Scottsdale, AZ 85260</a>
        </div>
      </div>
    </div>
    <div class="col-3 md-col-6 sm-col-12 stretch footer__logo">
      <a href="/" class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Defendry-Logo.svg" alt="Defendry Logo" />
      </a>
      <p class="text-center">
        Next Generation Surveillance <span>with ART<sup>TM</sup></span>
      </p>
      <p class="text-center">
        <img style="max-width:200px; margin:auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/ESA_Assoc_Member_Logo.png" alt="ESA Association Member Logo" />
      </p>

      <a class="text-center" href="https://www.avnet.com" target="_blank" style="display:none;">
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
