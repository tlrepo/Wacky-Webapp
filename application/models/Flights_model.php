<?php

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-10-05
 * Time: 4:56 PM
 */
class Flights_model extends CI_Model {

    var $data = array(
        '1' => array('id' => 'C123456', 'from' => 'Vancouver',
            'to' => 'Calgary', 'departureTime' => '08:00', 'arrivalTime' => '09:30',
            'airline' => '737-800'),
        '2' => array('id' => 'C521469', 'from' => 'Vancouver',
            'to' => 'Ottawa', 'departureTime' => '08:00', 'arrivalTime' => '12:00',
            'airline' => 'A321'),
        '3' => array('id' => 'C971156', 'from' => 'Vancouver',
            'to' => 'Calgary', 'departureTime' => '09:00', 'arrivalTime' => '10:00',
            'airline' => 'Boeing 747'),
        '4' => array('id' => 'C918275', 'from' => 'Vancouver',
            'to' => 'Ottawa', 'departureTime' => '10:00', 'arrivalTime' => '14:00',
            'airline' => 'Airbus A340'),
        '5' => array('id' => 'C123456', 'from' => 'Calgary',
            'to' => 'Vancouver', 'departureTime' => '14:00', 'arrivalTime' => '15:30',
            'airline' => '737-800'),
        '6' => array('id' => 'C521469', 'from' => 'Ottawa',
            'to' => 'Vancouver', 'departureTime' => '15:00', 'arrivalTime' => '17:00',
            'airline' => 'A321'),
        '7' => array('id' => 'C971156', 'from' => 'Calgary',
            'to' => 'Vancouver', 'departureTime' => '16:00', 'arrivalTime' => '17:00',
            'airline' => 'Boeing 747'),
        '8' => array('id' => 'C918275', 'from' => 'Ottawa',
            'to' => 'Vancouver', 'departureTime' => '18:00', 'arrivalTime' => '20:00',
            'airline' => 'Airbus A340')
    );

    // Constructor
    public function __construct() {
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->data as $key => $record) {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }
    }

    // retrieve a single flight, null if not found
    public function get($which) {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    // retrieve all of the data
    public function all() {
        return $this->data;
    }

}
