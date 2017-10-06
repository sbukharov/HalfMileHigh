<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet extends Application
{
  // Default controller that grabs all planes from the fleet and renders the fleet view
	public function index()
	{
    // Get all planes in our fleet model
    $fleet = $this->fleetmdl->all();
    $this->data['pagebody'] = 'fleet';
    $this->data['fleet'] = $fleet;
		$this->render();
  }

  // Subcontroller to get a single plane from its id and renders its details in the plane view.
  public function show($planeid)
  {
      $plane = $this->fleetmdl->get($planeid);
      $this->data['pagebody'] = 'plane';
      $this->data['id'] = $plane['id'];
      $this->data['make'] = $plane['make'];
      $this->data['model'] = $plane['model'];
      $this->data['price'] = $plane['price'];
      $this->data['seats'] = $plane['seats'];
      $this->data['reach'] = $plane['reach'];
      $this->data['cruise'] = $plane['cruise'];
      $this->data['takeoff'] = $plane['takeoff'];
      $this->data['hourly'] = $plane['hourly'];
      $this->render();
  }
}
