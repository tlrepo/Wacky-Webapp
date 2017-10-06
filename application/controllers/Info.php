<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends Application {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['pagebody'] = 'fleet';
        $source = $this->planes->all();
        header("Content-type: application/json");
        echo json_encode($source,JSON_PRETTY_PRINT);
    }

}
