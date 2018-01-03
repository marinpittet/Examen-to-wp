<?php
	
	function customGallery($postId, $option = 'none') {
		$print;

		if ( get_post_gallery() ) {
			$gallery = get_post_gallery( $postId, false );
			$print = '<div class="flexslider"><ul class="slides">';

			$id = $gallery['ids'];
			$ids = explode(',', $id);

			foreach( $ids AS $source ) {
				$src = wp_get_attachment_image_src($source, 'slideshow');

				$img_id = get_post_thumbnail_id($postId);
				$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

				$print .= '<li><img src="' . wp_kses_post($src[0]) . '" alt="' . $alt . '"></li>';
			}

			$print .= '</ul></div>';

			echo $print;
		};
	}
?>