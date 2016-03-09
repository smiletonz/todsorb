<?php get_header(); ?>

	<div class="content-banner">
		<?php if (is_active_sidebar( 'banner-1' )): ?>
			<?php dynamic_sidebar( 'banner-1' ); ?>
		<?php else: ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner.jpg">
		<?php endif; ?>
	</div>

	<div class="content-area">
		<div class="post_area">
			<h2>Post</h2>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
