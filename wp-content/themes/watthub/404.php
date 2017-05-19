<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package watthub
 */

get_header(); ?>

	<style>
		.notfound-body {
			text-align: center;
		}
	</style>

	<div class="notfound-body">
		<img src="http://khantsithuz.sgedu.site/a2-wp/wp-content/uploads/images/404.png" width="500px" height="500px"/>
		<h1><b> I don't think you are looking for <font color="purple">Unicorn</font></b></h1>
		<h5 style="color:red"> 404 NOT FOUND </h5>
	</div>

<?php
get_footer();
