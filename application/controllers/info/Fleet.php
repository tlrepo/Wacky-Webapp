<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet extends Application {

    public $tasks;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $role = $this->session->userdata('userrole');
        $this->data['pagetitle'] = 'Fleet Page (' . $role . ')';

        $source = $this->planes->all();
        $this->data['planes'] = $source;
        //checking if the role is allowed owner and redirecting it to the right view
        if ($role == ROLE_OWNER) {
            $this->data['pagebody'] = 'fleetx';
        } else {
            $this->data['pagebody'] = 'fleet';
        }
        $this->render();
    }

}
