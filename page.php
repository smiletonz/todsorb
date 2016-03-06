<?php get_header(); ?>

	<div class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<div class="entry-content"><?php the_content(); ?></div>

		<?php endwhile; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
