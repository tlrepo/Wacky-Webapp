<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Planes
 *
 * @author Michael
 */
class Planes extends CI_Model {

    var $data = array(
        '1' => array('id' => 'C123456', 'type' => '737-800'),
        '2' => array('id' => 'C521469', 'type' => 'A321'),
        '3' => array('id' => 'C971156', 'type' => 'Boeing 747'),
        '4' => array('id' => 'C918275', 'type' => 'Airbus A340'),
        '5' => array('id' => 'C521469', 'type' => 'Boeing 787'),
        '6' => array('id' => 'C420', 'type' => 'F-22'),
        '7' => array('id' => 'C521470', 'type' => 'Bugatti')
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

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }

}
