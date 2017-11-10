<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Homepage will be the default controller where it will display the number of
 * -planes
 * -flights
 * -airline destinations
 *
 * @author Evan
 */
class Homepage extends Application {

    /**
     * Homepage controller.
     */
    public function index() {
        $flightData = $this->flights_model->all();
        $planesSource = $this->planes->all();
        $destination = array();
        foreach($flightData as $flights) {
            if(!in_array($flights['airline'], $destination)) {
                array_push($destination, $flights['airline']);
            }
        }
        //Split the array up with commas
        $role = $this->session->userdata('userrole');    
        $this->data['pagetitle'] = 'Homepage ('. $role . ')';
        $this->data['destinationAirline'] = implode(', ', $destination);
        $this->data['numOfPlanes'] = count($planesSource);
        $this->data['numOfFlights'] = count($flightData);
        $this->data['pagebody'] = 'homepage';
        $this->data['income'] = '$16,777,216';
        $this->render();
    }

}
