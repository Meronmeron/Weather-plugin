<?php
/*
Plugin Name: Weather Plugin
Description: Display current weather for the current location or Delhi.
Version: 1.0
Author: Meron
*/

// Include the weather functions
require plugin_dir_path(__FILE__) . 'includes/weather-functions.php';

// Register and display the weather widget
function weather_widget() {
    include plugin_dir_path(__FILE__) . 'templates/weather-widget.php';
}

function register_weather_widget() {
    register_widget('Weather_Widget');
}

add_action('widgets_init', 'register_weather_widget');
?>