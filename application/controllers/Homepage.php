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
class Homepage extends Application
{

	/**
         * Homepage controller.
	 */
	public function index()
	{ 
            $this->data['pagebody'] = 'homepage';
            $this->data['airplane'] = '10';
            $this->data['airport'] = '20';
            $this->data['schedule'] = '80';
            $this->data['income'] = '9999$';
            $this->render(); 
	}
        
        

}