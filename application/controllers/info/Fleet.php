<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet extends CI_Controller
{
	public function index() {

    //get all planes in our fleet model
    $fleet = $this->fleetmdl->all();
    $this->data['pagebody'] = 'info/fleet';
    $this->data['fleet'] = json_encode($fleet);
    $this->render();
  }

  /**
	 * Render this page in JSON format
	 */
	function render()
	{
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->parser->parse('info/fleet', $this->data);
	}
}

?>
