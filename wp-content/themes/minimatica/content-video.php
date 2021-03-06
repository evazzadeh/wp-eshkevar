<div id="content">
	<section class="entry-content">
		<?php minimatica_post_video(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
		<?php wp_link_pages( array( 'before' => '<p class="pagination">' . __( 'صفحه ها' ) . ': ' ) ); ?>
	</section><!-- .entry-content -->
	<div class="entry-header">
		<aside class="entry-meta">
			<ul>
				<li><?php _e( 'نوشته شده توسط', 'minimatica' ); ?> <?php the_author_posts_link(); ?></li>
				<li><?php _e( 'در', 'minimatica' ); ?> <time datetime="<?php the_time('j F Y') ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></li>
				<li><?php _e( 'درباره ي', 'minimatica' ); ?> <?php the_category( ', ' ); ?></li>
			</ul>
			<?php the_tags( '<div class="entry-tags">', ' ', '</div>' ); ?>
		</aside><!-- .entry-meta -->
		<div class="clear"></div>
	</div><!-- .entry-header -->
	<?php comments_template(); ?>
	<div class="clear"></div>
</div><!-- #content -->