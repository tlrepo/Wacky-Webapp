<?php
/**
 * Class Plane
 *
 * @author Daniel Park
 */
class Plane extends Entity {
    private $id;
    private $manufacturer;
    private $model;
    private $price;
    private $seats;
    private $reach;
    private $cruise;
    private $takeoff;
    private $hourly;

    // Set the id of the plane
    public function setId($id) {
        $this->id = $id;
    }

    // Set the plane type
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
    }

    // Set the model of the plane
    public function setModel($model) {
        $this->model = $model;
    }

    // Set the price of the plane
    public function setPrice($price) {
        $this->price = $price;
    }

    // Set the number of seats
    public function setSeats($seats) {
        $this->seats = $seats;
    }

    // Set the reach number
    public function setReach($reach) {
        $this->reach = $reach;
    }

    // Set the cruise
    public function setCruise($cruise) {
        $this->cruise = $cruise;
    }

    // Set the takeoff
    public function setTakeoff($takeoff) {
        $this->takeoff = $takeoff;
    }

    // Set the hour
    public function setHourly($hourly) {
        $this->hourly = $hourly;
    }

    // Return plane ID
    public function getId() {
        return $this->id;
    }

    // Return plane type
    public function getManufacturer() {
        return $this->manufacturer;
    }

    // Return plane model
    public function getModel() {
        return $this->model;
    }

    // Return the price of the plane
    public function getPrice() {
        return $this->price;
    }

    // Return the number of seats
    public function getSeats() {
        return $this->seats;
    }

    public function getReach() {
        return $this->reach;
    }

    public function getCruise() {
        return $this->cruise;
    }

    public function getTakeoff() {
        return $this->takeoff;
    }

    public function getHourly() {
        return $this->hourly;
    }
}