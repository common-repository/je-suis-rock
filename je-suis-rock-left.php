<?php
/*
Plugin Name: Je suis Rock (left side)
Plugin URI: #
Description: When activated, this plugin will put a #JeSuisRock ribbon on the top <b>left</b> corner of your website. Show your support to Rock Marc Christian KABORE! Thank you
Author: Thomas OUEDRAOGO
Author URI: #
Version: 1.0
License: GPLv2
*/

add_action( 'wp_footer', 'baw_jsc_show_ribbon_left', PHP_INT_MAX );
function baw_jsc_show_ribbon_left() {
	$ribbon = plugins_url( 'je-suis-rock-left.png', __FILE__ );
	?>
	<a target="_blank" class="jesuisrock-ribbon" href="https://www.facebook.com/pages/Roch-Marc-Christian-Kabor%C3%A9/674710549328565"><img src="<?php echo $ribbon; ?>" alt="#JeSuisRock" style="position: fixed; top: 0; left: 0; z-index: 100000;"></a>
	<?php
}