<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package prizmbotspace
 */

get_header();
?>
<!-- only content wrapper -->
    <main class="content-wrapper">

      
      <section class="news container">
		
		<?php
		/*$args = array(
            'posts_per_page'   => 10,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'           => '',
            'author_name'      => '',
            'post_status'      => 'publish',
            'suppress_filters' => true 
        );
        query_posts($args);*/
		if ( have_posts() ) :
			
			while ( have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content', 'single' );
			endwhile;
			
		endif;
		?>
      </section>


    </main> <!-- end content wrapper -->
<?php
get_footer();
?>

