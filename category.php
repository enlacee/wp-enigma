<?php get_header(); ?>
<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( __( 'Category Archives: %s', 'weblizar' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
			</h1>
			</div>
		<?php endif; ?>	
		</div>
	</div>	
</div>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
<?php 
// the query to set the posts per page to 3
// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// $args = array('posts_per_page' => 3, 'paged' => $paged );
//query_posts($args);
?>
	<?php 
	if ( have_posts()): 
?>
<div class="enigma_service">
<div class="container">
        <div class="row isotope" id="isotope-service-container">  
<?php
	while ( have_posts() ): the_post();
	get_template_part('post','content'); ?>	
	<?php endwhile; 
	endif; ?>	                
        </div>
    </div>
</div>
<?php weblizar_navigation(); ?>
	</div>	
	<?php //get_sidebar(); ?>
	</div>
</div>
<style type="text/css">
.title-size {
	min-height: 80px
}
.enigma_service_area {
	margin-bottom: 15px;
}
.enigma_service {
	padding: 0;
}
</style>   
<?php get_footer(); ?>