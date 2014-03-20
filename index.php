<?php get_header(); ?>


<!-- WE ENDED THE HEADER HERE-->

<!-- Content -->


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article>
	<header class="major">
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
	</header>
	<?php the_content(); ?>

			</article>
		<?php endwhile; ?>
		<?php wp_pagenavi(); ?>
		</div>
	</div>


	<?php get_sidebar(); ?>


<?php get_footer(); ?>