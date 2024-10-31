<?php
/*
Plugin Name: Remove Tarski Feed Links
Description: Removes the RSS feed links from the navbar and footer of Tarski theme.
Version: 0.2
Author: Vesselin Petkov
Author URI: http://vpetkov.com
*/

/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * AUTHOR: Vesselin Petkov <vpetkov@vpetkov.com>
 */

function removeTarskiFeedLinks() {
	remove_action('th_navbar', 'tarski_feedlink');
	remove_action('th_footer', 'tarski_feedlink');
}

add_action('init', 'removeTarskiFeedLinks');

?>