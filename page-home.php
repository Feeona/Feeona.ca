<?php 
/*
Template Name: Home Page
*/
 ?>


<?php get_header(); ?>

<!-- Content -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="content">
	<?php $Faceimg = get_field('enter_image'); ?>
	<img src="<?php echo $Faceimg["url"] ?>">

	<h1><?php the_field('enter_name'); ?></h1>
	<h2><?php the_field('job_title'); ?></h2>

	<?php $SMimg1 = get_field('social_media1'); ?>
	<?php $SMimg2 = get_field('social_media2'); ?>
	<?php $SMimg3 = get_field('social_media3'); ?>
	<?php $SMimg4 = get_field('social_media4'); ?>

	<img src="<?php echo $SMimg1["url"] ?>">
	<img src="<?php echo $SMimg2["url"] ?>">
	<img src="<?php echo $SMimg3["url"] ?>">
	<img src="<?php echo $SMimg4["url"] ?>">
	

			</article>

			<article class="fSection">
			<h3><?php the_field('skill_name'); ?></h3>
			

			<?php $SIimg1 = get_field('skill_icon1'); ?>
			
			<img src="<?php echo $SIimg1["url"] ?>">


			<div class="progress-pie-chart" data-percent="81">
			  <div class="ppc-progress">
			    <div class="ppc-progress-fill"></div>
			  </div>
			  <div class="ppc-percents">
			    <div class="pcc-percents-wrapper">
			      <span>%</span>
			    </div>
			  </div>
			</div>
			<h3><?php the_field('skill_name2'); ?></h3>

			<?php $SIimg2 = get_field('skill_icon2'); ?>
			
			<img src="<?php echo $SIimg2["url"] ?>">


			<div class="progress-pie-chart" data-percent="81">
			  <div class="ppc-progress">
			    <div class="ppc-progress-fill"></div>
			  </div>
			  <div class="ppc-percents">
			    <div class="pcc-percents-wrapper">
			      <span>%</span>
			    </div>
			  </div>
			</div>
			<h3><?php the_field('skill_name3'); ?></h3>
		
			<?php $SIimg3 = get_field('skill_icon3'); ?>
			
			<img src="<?php echo $SIimg3["url"] ?>">

			<div class="progress-pie-chart" data-percent="81">
			  <div class="ppc-progress">
			    <div class="ppc-progress-fill"></div>
			  </div>
			  <div class="ppc-percents">
			    <div class="pcc-percents-wrapper">
			      <span>%</span>
			    </div>
			  </div>
			</div>


						</article>
							
						<article class="content">
							<?php the_content(); ?>
									</article>

									
		<?php endwhile; ?>
		</div>
	</div>




<?php get_footer(); ?>