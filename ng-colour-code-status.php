<?php
/**
 * Plugin Name: NG Colour Code Post Status
 * Plugin URI: https://www.nosegraze.com
 * Description: Colour codes posts based on their statuses.
 * Version: 1.0
 * Author: Nose Graze
 * Author URI: https://www.nosegraze.com
 * License: GPL2
 * 
 * @package ng-colour-code-status
 * @copyright Copyright (c) 2016, Nose Graze Ltd.
 * @license GPL2+
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Add Colour Codes
 *
 * @since 1.0
 * @return void
 */
function ng_colour_code_post_status() {
	?>
	<style>
		.status-draft {
			background: #fad8d8 !important;
		}

		.status-future {
			background: #CCFF99 !important;
		}

		.status-pending {
			background: #FFFF99 !important;
		}

		.status-private {
			background: #FFCC99;
		}
	</style>
	<?php
}

add_action( 'admin_head', 'ng_colour_code_post_status' );