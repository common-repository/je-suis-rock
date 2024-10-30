<?php
/*
Plugin Name: Je suis Rock (right side)
Plugin URI: #
Description: When activated, this plugin will put a #JeSuisRock ribbon on the top <b>right</b> corner of your website. Show your support to Rock Marc Christian KABORE! Thank you
Author: Thomas OUEDRAOGO
Author URI: #
Version: 1.0
License: GPLv2
*/

add_action( 'wp_footer', 'baw_jsc_show_ribbon', PHP_INT_MAX );
function baw_jsc_show_ribbon() {
	$ribbon = plugins_url( 'je-suis-rock.png', __FILE__ );
	?>
	<a target="_blank" class="jesuisrock-ribbon" href="https://www.facebook.com/pages/Roch-Marc-Christian-Kabor%C3%A9/674710549328565"><img src="<?php echo $ribbon; ?>" alt="#JeSuisRock" style="position: fixed; top: 0; right: 0; z-index: 100000;"></a>
	<?php
}