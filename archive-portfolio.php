 <?php get_header(); ?>
 <article class="content layered-paper">
        <?php
         if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<p class="client"><?php the_field('client_name'); ?></p>
			<p class="short"><?php the_field('short_desc'); ?></p>
		

			<?php while(has_sub_field('images')): ?> 
				<figure>
					<?php $image = get_sub_field('image'); ?>
					
					<img src="<?php echo $image['sizes']['thumbnail']; ?>">

					<figcaption>
						<?php the_sub_field('caption'); ?>
					</figcaption>				
				</figure>
			<?php endwhile; //end images loop ?>

			<?php the_content(); ?>	
		
          
        <?php endwhile; // end of the loop. ?>

</article>
 <?php get_footer(); ?>