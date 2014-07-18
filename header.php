<?php 

$parent = $post->post_parent;
$grandparent = $parent->post_parent;

if (is_page('1135') || $post->post_parent == '1135') {
	include (TEMPLATEPATH . '/header-dupage.php');

} elseif (is_page('110') || $post->post_parent == '110') {
	include (TEMPLATEPATH . '/header-south-southwest.php');
	
} elseif (is_page('99') || $post->post_parent == '99') {
	include (TEMPLATEPATH . '/header-northwest.php');

} elseif (is_page('14893') || $post->post_parent == '14893') {
	include (TEMPLATEPATH . '/header-eway.php');

} elseif ( is_page_template('search.php') || is_page_template('index.php')) {
	include (TEMPLATEPATH . '/header-default.php');
	
} else {
	include (TEMPLATEPATH . '/header-default.php');

}

?>
