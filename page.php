<?php get_header(); ?>

<!-- Content -->


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="content">
		<h2>
				rawr
		</h2>
	<?php the_content(); ?>

			</article>
		<?php endwhile; ?>
		</div>
	</div>




<?php get_footer(); ?>