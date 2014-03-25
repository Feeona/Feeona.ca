<?php get_header(); ?>


<!-- WE ENDED THE HEADER HERE-->

<!-- Content -->

<article class="blogContent layered-paper2">
<div class="blogTalk"><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
	<?php the_content(); ?>
			<?php endwhile; ?>
		<?php wp_pagenavi(); ?>
</div>
</article>



	<?php get_sidebar(); ?>

<?php get_footer(); ?>