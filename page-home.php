<?php 
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>

<!-- Content -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article class="content layered-paper">
		<div class="mahFace clearfix">
			<?php $Faceimg = get_field('enter_image'); ?>

			<img src="<?php echo $Faceimg["url"] ?>">

			<h1><?php the_field('enter_name'); ?></h1>

			<div class="jobTitles">
				<h2 class="job"><?php the_field('job_title'); ?></h2>	</div>
				<div class="jobTitles1">
					<h2 class="job"><a href="<?php the_field('job_title_link'); ?>" class ="jobLink" target="_blank"><?php the_field('job_title2'); ?></a></h2></div>
					<div class="jobTitles">
						<h2 class="job"><?php the_field('job_title3'); ?></h2></div>
					</div>

					<div class="links clearfix">



						<?php $SMimg1 = get_field('social_media1'); ?>
						<?php $SMimg2 = get_field('social_media2'); ?>
						<?php $SMimg3 = get_field('social_media3'); ?>
						<?php $SMimg4 = get_field('social_media4'); ?>

						<div class ="socialMedia"><a href="<?php the_field('social_media_link1'); ?>" target="_blank"><img src="<?php echo $SMimg1["url"] ?>"></a></div>
						<div class ="socialMedia"><a href="<?php the_field('social_media_link2'); ?>" target="_blank"><img src="<?php echo $SMimg2["url"] ?>"></a></div>
						<div class ="socialMedia"><a href="<?php the_field('social_media_link3'); ?>" target="_blank"><img src="<?php echo $SMimg3["url"] ?>"></a></div>
						<div class ="socialMedia"><a href="<?php the_field('social_media_link4'); ?>" target="_blank"><img src="<?php echo $SMimg4["url"] ?>"></a></div>
					</div>
				</div>



			</article>

			<article class="fSection">
				<div class="skillSection">
					<h3><?php the_field('skill_name'); ?></h3>
					<?php $SIimg1 = get_field('skill_icon1'); ?>
					<img src="<?php echo $SIimg1["url"] ?>" class="SIimg">
					<div class="progress-pie-chart" data-percent="95">
						<div class="ppc-progress">
							<div class="ppc-progress-fill"></div>
						</div>
						<div class="ppc-percents">
							<div class="pcc-percents-wrapper">
								<span>%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="skillSection">
					<h3><?php the_field('skill_name2'); ?></h3>
					<?php $SIimg2 = get_field('skill_icon2'); ?>
					<img src="<?php echo $SIimg2["url"] ?>" class="SIimg">
					<div class="progress-pie-chart" data-percent="85">
						<div class="ppc-progress">
							<div class="ppc-progress-fill"></div>
						</div>
						<div class="ppc-percents">
							<div class="pcc-percents-wrapper">
								<span>%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="skillSection">
					<h3><?php the_field('skill_name3'); ?></h3>
					<?php $SIimg3 = get_field('skill_icon3'); ?>
					<img src="<?php echo $SIimg3["url"] ?>" class="SIimg">
					<div class="progress-pie-chart" data-percent="65">
						<div class="ppc-progress">
							<div class="ppc-progress-fill"></div>
						</div>
						<div class="ppc-percents">
							<div class="pcc-percents-wrapper">
								<span>%</span>
							</div>
						</div>
					</div>
				</div>

			</article>

			<article class="content layered-paper">
				<div class="contentStyle clearfix">
					<h2>Wee bit more about me</h2>

					<div class="hobbiesSection">
						<?php $AMimg1 = get_field('about_me_image'); ?>
						<img src="<?php echo $AMimg1["url"] ?>" class="AMimg">
						<p><?php the_field('about_me_text'); ?></p>
					</div>

					<div class="hobbiesSection">
						<?php $AMimg2 = get_field('about_me_image2'); ?>
						<img src="<?php echo $AMimg2["url"] ?>" class="AMimg">
						<p><?php the_field('about_me_text2'); ?></p>
					</div>

					<div class="hobbiesSection">
						<?php $AMimg3 = get_field('about_me_image3'); ?>
						<img src="<?php echo $AMimg3["url"] ?>" class="AMimg">
						<p><?php the_field('about_me_text3'); ?></p>
					</div>

					<div class="hobbiesSection">
						<?php $AMimg3 = get_field('about_me_image4'); ?>
						<img src="<?php echo $AMimg3["url"] ?>" class="AMimg">
						<p><?php the_field('about_me_text4'); ?></p>
					</div>


					<?php the_content(); ?>


				</div>


			</article>


		<?php endwhile; ?>
	</div>
</div>




<?php get_footer(); ?>