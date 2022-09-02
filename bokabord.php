<?php
/**
* Template Name: bokabord
*/
?>

<?php get_header(); ?>

<main>
<div class="main_container">

<?php

   if ( have_posts() ) :

   while ( have_posts() ) :

   the_post();

?>

   <h1><?php the_title(); ?></h1>

   <p id="bokabord"><?php the_content(); ?></p>

<?php    

   endwhile;

   endif;

?>

</div>
   
</main>

<?php get_footer(); ?>

<!--<h1><?php the_title(); ?></h1>

      <img src="<?php the_field('image'); ?>"/>

      <p id="menu"><?php the_field('menu'); ?></p>

      <p id="content"><?php the_content(); ?></p>

      <p id="contact"><?php the_field('contact'); ?></p>

      <a id="link" href="<?php the_field('website'); ?>"><?php the_title(); ?></a>

      <p id="shareButton"><?php dynamic_sidebar('quinary'); ?></p>  -->