<?php

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-10-05
 * Time: 4:56 PM
 */
class Flights_model extends CI_Model {

    var $data = array(
        '1' => array('id' => 'C1', 'code' => 'WS246', 'from' => 'Vancouver',
            'to' => 'Calgary', 'departureTime' => '08:00', 'arrivalTime' => '09:30',
            'airline' => 'WestJet'),
        '2' => array('id' => 'C2', 'code' => 'AC8081', 'from' => 'Vancouver',
            'to' => 'Victoria', 'departureTime' => '08:00', 'arrivalTime' => '08:40',
            'airline' => 'Air Canada'),
        '3' => array('id' => 'C3', 'code' => 'AC8669', 'from' => 'San Diego',
            'to' => 'Vancouver', 'departureTime' => '08:00', 'arrivalTime' => '11:10',
            'airline' => 'Air Canada')
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
