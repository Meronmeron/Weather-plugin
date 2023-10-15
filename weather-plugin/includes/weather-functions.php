<?php
// Function to fetch weather data
function get_weather_data($lat = '28.6139', $lon='77.2090') {
    $api_key = '760a4d3d0223095ffb047887fb84354b';
    $api_url = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=$api_key";
    $response = wp_remote_get($api_url);
    if (is_array($response) && !is_wp_error($response)) {
        $data = json_decode($response['body']);
        return $data;
    }
    return null;
}
?>