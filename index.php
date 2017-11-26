<?php get_header(); ?>
<?php get_template_part( 'template-parts/preloader' ); ?>
<?php get_template_part( 'template-parts/header' ); ?>

<?php if ( have_posts() ): the_post() ?>
	<section class="grey-bg" id="education">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3 class="title-small">
						<span><?php the_title(); ?></span>
					</h3>
					<p class="content-detail"></p>
				</div>
				<div class="col-md-9 content-right">
					<div class="row">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php get_footer(); ?>


