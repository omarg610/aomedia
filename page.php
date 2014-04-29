<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 

//4 = OUR COMPANY
if($post->ID == 2 || has_ancestor(2) == 1 ){
?><article class="productLayout softwareUpdatesLayout"   >
<div class="cols">
<div class="col col1">

<!--start left nav -->
<nav class="lnav">
<?php 
wp_nav_menu( array( 
	'walker' => new X_Walker_Nav_Menu() 
	) );
?>
</nav> 

<?php get_sidebar('left'); ?>



</div>

<!--end left nav --><div class="col col2">

<article class="productContent">
			<?php while ( have_posts() ) : the_post(); ?>
            <?php the_breadcrumb(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

</article>


</div>
<div class="col col3">
<?php get_sidebar('right'); ?>
<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
</div>

</div>
</article>
  <?php } else { ?>
  
  <?php while ( have_posts() ) : the_post(); ?>
  <?php the_breadcrumb(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
  <?php comments_template( '', true ); ?>
  <?php endwhile; // end of the loop. ?>
  <?php } ?>
  
  <?php get_footer('la'); ?>
