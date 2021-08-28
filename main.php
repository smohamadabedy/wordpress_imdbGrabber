<?php
/**
 * Plugin Name
 *
 * @package           IMDB_grabber
 * @author            seyed mohammad hosien abedy nejad
 * @copyright         2021
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       IMDB_grabber
 * Description:       IMDB info GRABBER
 * Version:           1.0.0
 * Requires at least: 4
 * Requires PHP:      7
 * Author:            mohammad
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 // mail : m.h.o.abedi@gmail.com

 
add_action('admin_menu', 'add_plug_menu');
function add_plug_menu(){
    add_menu_page('My Page Title', 'دریافت اطلاعات imdb', 'manage_options', 'imdb_grabber_menu','create_imdb_grabber');
}
function create_imdb_grabber(){
	echo <<<EOT
	<hr/>
	<div style="padding:10px;">
	<h1>افزونه دریافت اطلاعات از imdb</h1><hr/>
	<div dir="rtl">
	<input type='text'  id='imdb_grabber_input' placeholder="IMDB Code"/>
	<br/>
	<a onclick='grab_imdb()' href='#' />دریافت</a>
	<p id="mess_p_imdb" style="display:none   ; border: 2px dashed red;   width: fit-content;    padding: 5px;  border-radius: 5px;">لطفا کمی صبر کنید این کار ممکن است تا یک دقیقه به طول بیانجامد<p/>
	<hr/>
	<div id="imdb_rec"></div>
	</div>
	</div>
EOT;	
}

wp_register_script('imdb_js', plugin_dir_url(__FILE__) . 'js/imdb.js');
wp_enqueue_script('imdb_js');



