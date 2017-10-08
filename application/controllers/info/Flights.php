<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends CI_Controller
{

	public function index() {

    //get all flights from flights model
    $flights = $this->flightsmdl->all();
    $this->data['pagebody'] = 'info/flights';
    $this->data['flights'] = json_encode($flights);
    $this->render();
  }


	  /**
		 * Render this page in JSON format
		 */
		function render()
		{
			$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
			$this->parser->parse('info/flights', $this->data);
		}
}

?>
