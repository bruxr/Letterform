<?php get_header(); ?>

<div id="content">
	
	<?php while ( have_posts() ): the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="post-title">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<time class="post-time"><?php the_time('F j'); ?> <span class="hidden"><?php the_time('Y h:i a'); ?></span></time>
		</div>
		
		<?php if ( is_single() ) : ?>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
		
	</article>
	<?php endwhile; ?>
	
</div>
        
<?php get_footer(); ?>