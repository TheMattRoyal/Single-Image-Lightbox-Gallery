<?php
// The function for displaying the single image gallery posts.
function mattroyal_gallery_shortcode() {

	$loop = new WP_Query(array('post_type' => 'galleries'));
	if($loop){
		while ($loop->have_posts()){
			 global $post;
			 $loop->the_post();
			 $count++;
			 $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
			 $imageurl = get_post_meta($post->ID, 'ecpt_uploadimage', true);
			
			 if($count % 3 == 0){ 
				$output .=  '<div class="sig_gallery '.$count.' sig_thirds">';
					} 
					else if($count % 4 == 0) {
						$output .=  '<div class="sig_gallery '.$count.' sig_fourths">';
						}
					else {
						$output .=  '<div class="sig_gallery '.$count.'">';
				}
				
			 $output .= '
			 <h3 class="sig_title">'.get_the_title().'</h3>
			 <div class="sig_thumb">
			 <a class="fancybox" rel="'.$count.'" href="'. $url.'"><img src="'.$url.'" /></a>
			 </div><ul>';
			 foreach ($imageurl as $img) {
				$output .= '<a class="fancybox" rel="'. $count .'" href="' . $img . '"></a>';
					} 
			$output .= '</ul></div>';
		}
		
	wp_reset_postdata();
	
	}
	else
		$output = 'Sorry, No Galleries Yet. Come Back Soon.';				
		
		return $output;
}

add_shortcode('Single_Image_Gallery','mattroyal_gallery_shortcode'); 

?>