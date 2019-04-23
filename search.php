<?php
  /**
   * The search results template.
   *
   * Used when a search is performed.
   */
   get_header();
   if ( have_posts() ) : ?>

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

           <?php while ( have_posts() ) : the_post(); ?>

           <div class="row search__single-row">

             <div class="sm-col-11 col-12 col-centered col-no-pad columns">
               <a href="<?php echo get_permalink(); ?>">
                 <h2 class="search__single-row__title">
                   <?php the_title(); ?>
                 </h2>
               </a>
               <p class="small-meta-font">
                 <a class="search-url" href="<?php echo get_permalink(); ?>">
                   <?php echo get_permalink(); ?>
                 </a>
               </p>
               <h6>
                 <?php the_date(); ?>
               </h6>
               <p style="margin-top:15px;">
                 <?php the_excerpt(); ?>
               </p>

             </div>

           </div>

           <?php endwhile; ?>
         </div>
       </div>

       <?php the_posts_pagination();

       else :
         echo '<h2>Sorry, no posts have been found</h2>'; ?>

     </section>

   <?php endif;
   get_footer();
