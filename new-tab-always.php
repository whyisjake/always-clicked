<?php
/*
Plugin Name: New Tab Always
Description: Ensure that the new tab is always clicked.
Plugin URI: http://jakespurlock.com
Author: Jake Spurlock
Author URI: http://jakespurlock.com
Version: 0.5
License: GPL2
*/

/*

    Copyright (C) 2016  Jake Spurlock  whyisjake@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'admin_head', function() {
	global $pagenow;
	if ( $pagenow === 'post.php' ) {
		?>
		<script>
			jQuery(document).ready(function($){
				var linkTarget = jQuery( '#wp-link-target' );
				if ( linkTarget.length ) {
					linkTarget.prop( 'checked', true );
				}
			});
		</script>
		<?php
	}

});

