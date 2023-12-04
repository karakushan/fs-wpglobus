<?php
/*
Plugin Name: F-Shop WPGlobus
Plugin URI: https://f-shop.top/
Description:  F-Shop WPGlobus integration
Version: 1.0
Author: Vitaliy Karakushan
Author URI: https://f-shop.top/
License: GPL2
Domain: f-shop
*/

/*
Copyright 2016 Vitaliy Karakushan  (email : karakushan@gmail.com)

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
defined('ABSPATH') || exit;

if (!is_plugin_active('f-shop/f-shop.php') || !is_plugin_active('wpglobus/wpglobus.php')) {
    add_action('admin_notices', function () {
        echo '<div class="notice notice-error is-dismissible">
          <p>Для работы плагина "F-SHOP WPGLOBUS" необходим плагин F-SHOP и WPGLOBUS.</p>
         </div>';
    });

    return;
}

require_once __DIR__ . '/inc/FS_WPGlobus.php';
new FS_WPGlobus();