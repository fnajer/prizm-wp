<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prizmbotspace
 */

?>
<?php if ( 'post' === get_post_type() ) : ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('news__item'); ?>>
	<img class="news__item-img" src="<?php the_post_thumbnail_url() ?>" width="350" height="176" alt="Logo of minter site" />
	<div class="news__item-body">
	  <div class="news__item-content">
			<span class="item__subtitle">
			<?php 
				foreach((get_the_category()) as $category){
					echo $category->name." ";
				}	
			?>
			</span>
			<h4 class="item__title"><?php the_title(); ?></h4>
			<p class="item__text"><?php the_excerpt(); ?></p>
	  </div>
	  <div class="item__footer">
			<a class="button button_theme_purple button_mr_none" href="<?php the_permalink(); ?>">Read</a>
			<span class="item__date"><?php the_time('M d, Y' ); ?></span>
	  </div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>

