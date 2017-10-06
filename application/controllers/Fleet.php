<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet extends Application
{

	public function index()
	{
        //get all planes in our fleet model
        $fleet = $this->fleetmdl->all();
        $this->data['pagebody'] = 'fleet';
        $this->data['fleet'] = $fleet;
		$this->render();
	}

}
