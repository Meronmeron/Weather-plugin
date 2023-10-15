<?php
class Weather_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'weather_widget',
            'Weather Widget',
            array('description' => 'Displays the current weather.')
        );
    }

    public function widget($args, $instance) {
        $lat = 28.6139;
        $lon = 77.2090; 
        $weather_data = get_weather_data($lat,$lon);

        if ($weather_data) {
            echo $args['before_widget'];
            echo $args['before_title'] . 'Weather' . $args['after_title'];
            echo 'Current Temperature: ' . $weather_data->main->temp . '°C';
            echo $args['after_widget'];
        }
    }
}

?>