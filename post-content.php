<?php if (is_category()) : ?>
            <!-- -->
            <div class=" col-md-4 service pull-left" style="border-bottom:1px solid #EDF0F2; margin: 0 0 15px 0;">
            <div class="enigma_service_area appear-animation bounceIn appear-animation-visible">            
            <div class="enigma_service_detail media-body">
        	<h3 class="title-size"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php echo limit_string(get_the_title(), 40); ?></a></h3>
            <!--<h3><a href="#">Electricidad Industrial</a></h3>-->
            <?php if(has_post_thumbnail()): ?>
        	<?php $img = array('class' => 'enigma_img_responsive'); ?>                                  
            <div>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('blog_2c_thumb',$img); ?>
            </div>
        <?php elseif ( !empty(get_post_meta(get_the_ID(), 'post_content_video', true)) ): ?>
        <?php 
        	$valueVIdeo = get_post_meta(get_the_ID(), 'post_content_video', true);
    		$eval = strpos($valueVIdeo, 'www.youtube.com'); 
        	if ($eval !== false) {
        		$id = substr($valueVIdeo, strlen($valueVIdeo)-11);
        		$src = "http://img.youtube.com/vi/{$id}/hqdefault.jpg";
		?>
	            <div>
	            <a href="<?php the_permalink(); ?>">
	            <img src="<?php echo $src ?>" class="img-responsive_" alt="<?php the_title() ?>" width="350" height="250"></a>
	            </div>
		<?php 
        	}        	
        ?>        	
    	<?php else : ?>
	            <div>
	            <a href="<?php the_permalink(); ?>">
	            <img src="<?php echo get_template_directory_uri() ?>/images/electricistas-1.jpg" class="img-responsive" alt="<?php the_title() ?>" width="350" height="200"></a>
	            </div>
    	
    	<?php endif; ?>


            </div>
            </div>
            </div>
            
         



<?php elseif (is_single()) : ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
    <ul class="blog-date-left">
        <li class="enigma_post_date">
        <?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
        <span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
        <?php else : ?>
        <span class="date"><?php echo get_the_date(); ?></span>
        <?php endif; ?>
        </li>
        <li class="enigma_post_author"><?php echo get_avatar(get_the_author_meta( 'ID' ),96); ?></li>
        <li class="enigma_blog_comment"><i class="fa fa-comments-o"></i><h6><?php comments_popup_link( '0', '1', '%', '', '-'); ?></h6></li>
    </ul>
    <div class="post-content-wrap">
        <?php if(has_post_thumbnail()): 
        $img = array('class' => 'enigma_img_responsive'); ?>
        <div class="enigma_blog_thumb_wrapper_showcase">                        
            <div class="enigma_blog-img">
            <?php the_post_thumbnail('blog_2c_thumb',$img); ?>                      
            </div>
            <?php if (is_home()) : ?>
            <div class="enigma_blog_thumb_wrapper_showcase_overlay">
            <div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
                <div class="enigma_blog_thumb_wrapper_showcase_icons">
                    <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                </div>
            </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="enigma_fuul_blog_detail_padding">
        <h2><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
        <div class="row">
        <div class="col-md-6 col-sm-3">
        <?php if(get_the_tag_list() != '') { ?>
        <p class="enigma_tags"><?php the_tags( __('Tags : ','weblizar'), '', '<br />'); ?></p>
        <?php } ?>
        </div>
        <div class="col-md-6 col-sm-3">
        <?php if(get_the_category_list() != '') { ?>
        <p class="enigma_cats"><?php echo __("Category : ",'weblizar');
        the_category(' , '); ?></p>
        <?php } ?>
        </div>
        </div>
        <?php the_content( __( 'Read More' , 'weblizar' ) ); 
        $defaults = array(
              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','weblizar'  ),
              'after'            => '</div></div>',
              'link_before'      => '',
              'link_after'       => '',
              'next_or_number'   => 'number',
              'separator'        => ' ',
              'nextpagelink'     => __( 'Next page'  ,'weblizar' ),
              'previouspagelink' => __( 'Previous page' ,'weblizar'),
              'pagelink'         => '%',
              'echo'             => 1
              );
              wp_link_pages( $defaults ); ?>
        </div>
    </div>
</div>  
<div class="push-right">
<hr class="blog-sep header-sep">
</div>

<?php endif; ?>

    




