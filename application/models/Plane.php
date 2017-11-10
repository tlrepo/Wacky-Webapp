<?php
/**
 * Class Plane
 *
 * @author Daniel Park
 */
class Plane extends Entity {
    private $id;
    private $type;

    // Set the id of the plane
    public function setId($id) {
        $this->id = $id;
    }

    // Set the plane type;
    public function setType($type) {
        $this->type = $type;
    }
    
    // Return plane ID
    public function getId() {
        return $this->id;
    }

    // Return plane type
    public function getType() {
        return $this->type;
    }
}