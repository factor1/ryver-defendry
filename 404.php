<?php
  /**
   * The 404 Not Found template.
   *
   * Used when WordPress encounters an unknown URL.
   */
  get_header();
?>

  <section class="container error-404 full-page">
    <div class="row row--justify-content-center contact-page">
      <div class="col-4 sm-col-9 col-centered">
        <div data-aos="fade-right">
          <h2>Page not found.</h2>
          <p>How about <a href="<?php echo get_home_url(); ?>" >returning home</a>?</p>
        </div>
      </div>
    </div>
  </section>

<?php
  get_footer();
