<?php/* Template Name: Artwork Page */  ?>

<?php get_header();  ?>

<div class="container blog-container" >
    <div class="main" id="main" tabindex="-1">
	    <div class="blog-content">
	    	<?php // Start the loop ?>
	    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		        <article class="each-post lightbox">
		        	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
		        	
		        	<?php echo the_post_thumbnail('medium_large');?>
		        	<h2 class="post-title"><?php the_title(); ?></h2>
		        </article>
	    	<?php endwhile; // end the loop ?>
	    </div><!-- /blog-content -->
	</div> <!-- /.main -->
</div> <!-- /.container -->
<?php get_footer(); ?>
