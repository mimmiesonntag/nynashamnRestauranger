<?php
/**
* Template Name: hamnen
*/
?>


<?php get_header(); ?>

<main>
  <div class="main_container">
      <?php
      $query_args = array(
         'post_type' => 'post',
         'category_name' => 'hamnen',
         'posts_per_page' => 6,
      );

      $my_query = new WP_Query($query_args);

         if( $my_query->have_posts() ):
         while( $my_query->have_posts() ): $my_query->the_post();

      ?>


<h1 id="pageTitle"><?php the_title(); ?></h1>


   
      <img class="RestaurangImg" src="<?php the_field('bilder'); ?>"/> 
   
   <div class="contactDiv">
      <div class="restaurangText" >
         <p id="contact"><?php the_field('text'); ?></p>  
      </div>
      <div class="restaurangMeny">
         <p id="contact"><?php the_field('meny'); ?></p>  
      </div>
      <div class="restaurangInfo">
         <p id="contact"><?php the_field('inforestaurang'); ?></p>  
      </div>

      <a id="link" href="<?php the_field('hemsida'); ?>"><?php the_title(); ?></a>
   
   </div>
<p><?php the_content(); ?></p>

<p><?php the_field('text'); ?></p>


      <?php    

         endwhile;
         endif;
         wp_reset_postdata();


      ?>
   </div>
    
</main>

<?php get_footer(); ?>



<!--<h1><?php the_title(); ?></h1>

      <img src="<?php the_field('image'); ?>"/>

      <p id="menu"><?php the_field('menu'); ?></p>

      <p id="content"><?php the_content(); ?></p>

      <p id="contact"><?php the_field('contact'); ?></p>  byt ut contact till tex. bilder menyn osv (fälten som finns i inlägg)

      <a id="link" href="<?php the_field('website'); ?>"><?php the_title(); ?></a>

      <p id="shareButton"><?php dynamic_sidebar('quinary'); ?></p>  -->