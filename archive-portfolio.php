<?php get_header(); ?>
<article class="content layered-paper clearfix">

	<?php
	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="portSections">
		<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></h2>
		<div class="portParts">
			<?php $images = get_field('image'); ?>

			<figure>
				<img src="<?php echo $images[0]['images']['sizes']['thumbnail']; ?>" class="portImgSize">			
			</figure>

			<p class="client"><?php the_field('client_name'); ?></p>
		</div>


	</div>

<?php endwhile; // end of the loop. ?>

</article>

<?php get_footer(); ?>