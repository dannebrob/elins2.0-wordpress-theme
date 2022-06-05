<?php get_header(); ?>
<div class="underline"></div>
<section id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="top" <?php post_class(); ?>>

 <h1> <?php the_title(); ?> </h1>
 <?php the_content(); ?>



</div>

<?php endwhile; else : ?>
    <div id="top" <?php post_class(); ?>>
<h1> <?php esc_html_e( '404', 'brfvivaldi'); ?></h1>

<div <?php post_class(); ?> >
<p> <?php esc_html_e( 'Sorry! No content found!', 'brfvivaldi'); ?></p>
</div>

    </div>
<?php endif; ?>


</section> <!-- end of content -->
<div class="underline"></div>

<?php get_footer(); ?>