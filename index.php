<?php get_header(); ?>

<div class="content-area">

	<?php if ( have_posts() ) : ?>

		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			
			<article class="content-item">
				<a href="<?php the_permalink(); ?>">
					<div class="pic">
						<?php 
							if (has_post_thumbnail()) the_post_thumbnail(); 
							else echo '<img src="'.get_stylesheet_directory_uri(). '/img/thumb.jpg">';
						?>
					</div><!--pic-->
					<div class="info">
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<div class="entry-meta"><?php echo get_the_date(); ?></div>
						<div class="entry-summary"><?php the_excerpt(); /* the_content(); */?></div>
					</div><!--info-->
				</a>
			</article>

		<?php endwhile; ?>

		<div class="content-pagination">
			<?php global $wp_query; $big = 99999999; echo paginate_links( array('base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),'format' => '?paged=%#%','current' => max( 1, get_query_var('paged') ),'total' => $wp_query->max_num_pages) ); ?>
		</div>

	<?php else : ?>

		<h1>Nothing Found</h1>

	<?php endif; ?>

</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
