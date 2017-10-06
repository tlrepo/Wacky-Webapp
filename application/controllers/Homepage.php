<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Homepage will be the default controller where it will display the number of
 *  -Air lines
 *  -Active air lines
 *  -Flight schedule
 *  -Total income
 *
 * @author Evan
 */
class Homepage extends Application {

    /**
     * Homepage controller.
     */
    public function index() {
        $test = $this->flights_model->get('1');
        $source = $this->planes->all();
        $this->data['planes'] = $source;
        $this->data['numOfPlanes'] = count($source);
        $this->data['pagebody'] = 'homepage';
        $this->data['airplane'] = '1';
        $this->data['airport'] = '20';
        $this->data['schedule'] = '80';
        $this->data['income'] = '9999$';
        $this->render();
    }

}
