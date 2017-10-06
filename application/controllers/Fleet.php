<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet extends Application
{

	public function __construct() {
            parent::__construct();
        }
        
	public function index()
	{
		$this->data['pagebody'] = 'fleet';
                $source = $this->planes->all();
                $this->data['planes'] = $source;
		$this->render(); 
	}

}