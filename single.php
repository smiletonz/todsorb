<?php get_header(); ?>

	<div class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<a href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>

			<p class="entry-meta">วันที่: <?php the_date(); ?> หมวดหมู่: <?php the_category(', ') ?> <?php the_tags( 'คำสำคัญ: ', ', ', ''); ?></p>

			<?php the_content(); ?>

			<?php comments_template(); ?>

		<?php endwhile; ?>

	</div><!--content-area-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
