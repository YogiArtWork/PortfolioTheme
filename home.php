<?php get_header(); ?>
<?php get_template_part( 'template-parts/preloader' ); ?>
<?php get_template_part( 'template-parts/header' ); ?>

<!--CONTENT WRAP-->
<div class="content-wrap">
	<!--CONTENT-->
	<div class="content">
		<?php get_template_part( 'template-parts/about' ); ?>
		<?php get_template_part( 'template-parts/work' ); ?>
		<?php get_template_part( 'template-parts/contact' ); ?>
		<?php get_template_part( 'template-parts/social-media-footer' ); ?>
		<!--/.CONTENT END-->
	</div>
	<!--/.CONTENT-WRAP END-->
</div>
<?php get_footer(); ?>


