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
    public function show($planeid) 
    {
        $plane = $this->fleetmdl->get($planeid);
        //echo $plane;
        $this->data['pagebody'] = 'plane';
        $this->data['id'] = $plane['id'];
        $this->data['make'] = $plane['make'];
        $this->data['model'] = $plane['model'];
        $this->data['cost'] = $plane['cost'];
        $this->render();
        
    }
}
