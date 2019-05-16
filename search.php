<?php
  /**
   * The search results template.
   *
   * Used when a search is performed.
   */
   get_header(); ?>

   <section class="container search">
     <div class="row">
       <div class="sm-col-11 col-10 col-centered columns">

         <h1 class="search__results-title">
           Search Results for:
           <form role="search" method="get" class="search-form" action="<?php get_template_directory_uri(); ?>/">
              <input type="search" class="search-field" placeholder="<?php echo get_search_query(); ?>" value="" name="s">
              <button type="submit" class="search-submit" value="Search">
                <i class="fa fa-search"></i>
              </button>
            </form>
         </h1>

        <?php if ( have_posts() ) : ?>

           <?php while ( have_posts() ) : the_post(); ?>

           <div class="row search__single-row">

             <div class="sm-col-11 col-12 col-centered col-no-pad columns">
               <a href="<?php echo relevanssi_get_permalink(); ?>">
                 <h2 class="search__single-row__title">
                   <?php relevanssi_the_title(); ?>
                 </h2>
               </a>
               <p class="small-meta-font">
                 <a class="search-url" href="<?php echo relevanssi_get_permalink(); ?>">
                   <?php echo relevanssi_get_permalink(); ?>
                 </a>
               </p>
               <p style="margin-top:15px;">
                 <?php relevanssi_the_excerpt(); ?>
               </p>

             </div>

           </div>

           <?php endwhile; ?>


       <?php the_posts_pagination();

       else :
         echo '<h2 class="sm-text-center">Sorry, no posts have been found</h2>'; ?>


       <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer();
