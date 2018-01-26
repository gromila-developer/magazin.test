<?php
/*
 Plugin Name: Photo Protect
 Plugin URI: http://wordpress.org/plugins/photo-protect/
 Description: Adds an invisible layer over your images to protect them from copying.
 Version: 1.0
 Author: Ivan Ross
 Author URI: http://www.visualwatermark.com
 */

/*
 Copyright 2013  Ivan Ross

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_action('wp_enqueue_scripts', 'pp_register_scripts');
add_filter('the_content', 'pp_filter_content3');

function pp_register_scripts() {
    wp_enqueue_script('picsprotect_js', plugins_url('picsprotect.js', __FILE__));
    wp_localize_script('picsprotect_js', 'pp_plugin', array('blank_gif' => plugins_url('blank.gif', __FILE__)));
}

function pp_filter_content3($content) {
    $imgPattern = '/<img[^>]*>/i';
    $attrPattern = '/ ([\w]+)[ ]*=[ ]*([\"\'])(.*?)\2/i';

    preg_match_all($imgPattern, $content, $images, PREG_SET_ORDER);

    foreach ($images as $img) {
        preg_match_all($attrPattern, $img[0], $attributes, PREG_SET_ORDER);

        $newImg = '<img';
        $classValue = 'pp_img';

        foreach ($attributes as $att) {
            $full = $att[0];
            $name = $att[1];
            $value = $att[3];

            if ($name != "class")
                $newImg .= $full;
            else
                $classValue = $value .= ' pp_post_image';
        }

        $newImg .= " class='$classValue' />";

        $content = str_replace($img[0], "$newImg", $content);
    }
    return $content;
}
?>
