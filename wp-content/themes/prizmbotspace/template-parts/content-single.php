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
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-article__body">
	  <div class="news__item-content">
			<div class="single-article__subheader">
				<span class="item__subtitle">
					<?php 
						foreach((get_the_category()) as $category){
							echo $category->name." ";
						}	
					?>
				</span>
				<span class="item__date"><?php the_time('M d, Y' ); ?></span>
			</div>
			<h4 class="item__title"><?php the_title(); ?></h4>
			<img class="single-article__img" src="<?php the_post_thumbnail_url() ?>" width="350" height="176" alt="Logo of minter site" />
			<p class="item__text"><?php echo strip_tags(get_the_content()); ?></p>
	  </div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>

