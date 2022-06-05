<!-- This is a WP theme is made by Daniel Brobäck, an aspiring web developer from Sweden -->
<!-- This is the header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elins Glada Ekologiska Kor</title>
    <?php wp_head(); ?>
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
-->
</head>

<body <?php body_class(); ?>> <!--This is the start of the body (header.php) -->
    

<header class="masterhead">


<nav>
<a class="logo" href="<?php echo get_home_url(); ?>">
   <h1>Elins Glada</h1>
    <h1>Ekologiska Kor</h1></a>
<?php
wp_nav_menu( array( 
    'theme_location' => 'main', 
    'container_class' => 'menu-main-container' ) ); 
?>
</nav> <!--end of main mav-->

</header>

