<?php
/**
 * Class Flight
 *
 * @author Daniel Park
 */
class Flight extends Entity {
    private $id;
    private $departure;
    private $arrival;
    private $departureTime;
    private $arrivalTime;

    // id = unique alphanumeric identifier (starting with first letter of team name)
    // departure = no departure before 08:00
    // arrival = no landing after 22:00
    // minimum 30 min between plane's landing and departure
    // fleet must be back by the end of the day

    // Set the ID of the flight
    public function setId($id) {
        $this->id = $id;
    }

    // Set the departure airport of the flight
    public function setDeparture($name) {
        $this->departure = $name;
    }

    // Set the arrival airport of the flight
    public function setArrival($name) {
        $this->arrival = $name;
    }

    // Set the departure time of the flight
    public function setDepartureTime($time) {
        $this->departureTime = $time;
    }

    // Set the arrival time of the flight
    public function setArrivalTime($time) {
        $this->arrivalTime = $time;
    }
}
