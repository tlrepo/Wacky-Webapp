<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-10-05
 * Time: 4:50 PM
 */

class Flights extends Application {
    public function index() {
        $source = $this->flights_model->all();

        foreach ($source as $flight)
            $cells[] = $this->parser->parse('_cell', (array) $flight, true);

        $this->load->library('table');
        $parms = array(
            'table_open' => '<table class="table">'
        );
        $this->table->set_template($parms);
        $this->table->set_heading('', 'ID', 'Departure', 'Arrival');
        $rows = $this->table->make_columns($cells, 1);

        $this->data['table'] = $this->table->generate($rows);
        $this->data['pagebody'] = 'flights_page';
        $this->render();
    }
}