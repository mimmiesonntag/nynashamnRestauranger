<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

      <nav>
    <ul class="menu">
       <li >
          <a><?php wp_nav_menu(array ('theme_location' => 'hem')); ?></a>
       </li>
    </ul>

</nav>
</header>


