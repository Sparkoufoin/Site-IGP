
<?php
/**
 * The main template file
 */
get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<?php }else if($layout_setting == 'One Column'){ ?>
			<div class="col-lg-12 col-md-12">
            <?php
 
 // The Query
 $query1 = new WP_Query( array( 'category_name' =>  'articleavant') );
  
 // The Loop
 if ( $query1->have_posts() ) {
     echo '<ul>';
     while ( $query1->have_posts() ) {
         $query1->the_post();
         echo '<li>' . get_the_title() . '</li>';
     }
     echo '</ul>';
 } else {
     // no posts found
 }
 /* Restore original Post Data */
 wp_reset_postdata();  ?>
				<div class="navigation">
	                <?php aagaz_startup_pagination_type(); ?>
                    </div>
                    <?php
 // The Query
 $query2 = new WP_Query( array( 'category_name' =>  '-articleavant') );
  
 // The Loop
 if ( $query2->have_posts() ) {
     echo '<ul>';
     while ( $query2->have_posts() ) {
         $query2->the_post();
         echo '<li>' . get_the_title() . '</li>';
     }
     echo '</ul>';
 } else {
     // no posts found
 }
 /* Restore original Post Data */
 wp_reset_postdata();  ?>
			</div>
	</div>
</main>

<?php get_footer();
