<?php
/**
 * Single Info template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables
 $services = get_field('work_services');
 $client = get_field('work_client');
 $year = get_field('work_year');
 $description = get_field('work_description');
?>

<section class="container">
  <div class="row single-page__info" id="more-content">
    <div class="col-5 offset-1 stretch">
      <?php if($services) : ?>
        <h5>Services</h5>
        <h4>
          <?php echo $services; ?>
        </h4>
      <?php endif; ?>
      <?php if($client) : ?>
        <h5>Client</h5>
        <h4>
          <?php echo $client; ?>
        </h4>
      <?php endif; ?>
      <?php if($year) : ?>
        <h5>Year</h5>
        <h4>
          <?php echo $year; ?>
        </h4>
      <?php endif; ?>
    </div>
    <div class="col-5 stretch">
      <?php if($description) : ?>
        <h5>Details</h5><br>
        <?php echo $description; ?>
      <?php endif; ?>
    </div>
    <div class="col-1 sm-hide"></div>
  </div>
</section>
