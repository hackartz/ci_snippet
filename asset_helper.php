<?php 
	if (!function_exists('css_url')) {
		function css_url($css = '') {
			$CI =& get_instance();
			return base_url()."assets/css/".$css;
		}
	}

	if (!function_exists('js_url')) {
		function js_url($js = '') {
			$CI =& get_instance();
			return base_url()."assets/js/".$js;
		}
	}

	if (!function_exists('img_url')) {
		function img_url($img = '') {
			$CI =& get_instance();
			return base_url()."assets/js/".$img;
		}
	}
?>