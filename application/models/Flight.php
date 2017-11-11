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

    // Return the id of the flight
    public function getId() {
        return $this->id;
    }

    // Return the departure airport
    public function getDeparture() {
        return $this->departure;
    }

    // Return the arrival airport
    public function getArrival() {
        return $this->arrival;
    }

    // Return the departure time of the flight
    public function getDepartureTime() {
        return $this->departureTime;
    }

    // Return the arrival time of the flight
    public function getArrivalTime() {
        return $this->arrivalTime;
    }
}
