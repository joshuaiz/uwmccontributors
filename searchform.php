<?php
/**
 * The template for displaying search form
 *
 * @package WordPress
 * @subpackage uwchilipepper
 * @since uwcp 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<!-- <label for="s" class="assistive-text"><?php _e( 'Search', 'bones' ); ?></label> -->
		<input type="search" results class="field" name="s" size="30" id="s" placeholder="<?php esc_attr_e( 'SEARCH UWMC', 'bones' ); ?>" />
		<button type="submit" class="submit flatbutton button" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'bones' ); ?>" /><span class="icon-search"></span><span class="search-text">SEARCH</span></button>
	</form>
