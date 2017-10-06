<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-10-05
 * Time: 4:56 PM
 */

class Flights_model extends CI_Model {
    var $data = array(
        '1'	 => array('id' => 'C1', 'code'	 => 'WS246', 'from'	 => 'Vancouver',
            'to'	 => 'Calgary'),
        '2'	 => array('id' => 'C2', 'code'	 => 'AC8081', 'from'	 => 'Vancouver',
            'to'	 => 'Victoria'),
        '3'	 => array('id' => 'C3', 'code'	 => 'AC8669', 'from'	 => 'San Diego',
            'to'	 => 'Vancouver')
    );

    // Constructor
    public function __construct()
    {
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->data as $key => $record)
        {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which)
    {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    // retrieve all of the quotes
    public function all()
    {
        return $this->data;
    }
}