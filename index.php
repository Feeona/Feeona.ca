<?php get_header(); ?>


<!-- WE ENDED THE HEADER HERE-->

<!-- Content -->

<article class="blogContent layered-paper2">
<div>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h2 class="dateyDate"><?php the_time(get_option('date_format')); ?></h2>
<div class="blogTalk">
			<h2><a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>

		</h2>
	<?php the_content(); ?>
			<?php endwhile; ?>
		<?php wp_pagenavi(); ?>

</div>
</div>
</article>


<article class="fSection2">
	<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>