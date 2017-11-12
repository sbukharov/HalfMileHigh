<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * This class represents the fleet page of our airport info site.
 * @author Sergey Bukharov, Karl Diab, Tim Davis, Jonathan Heggen, Kuanysh Boranbayev
 */
class Fleet extends Application
{
        
    /**
     * Index Page for this controller that grabs all planes from the fleet and renders the fleet view
     *
     * Maps to the following URL
     * 		http://comp4711.local/fleet
     */
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
        //All the data points to display
        $plane = $this->fleetmdl->getPlane($planeid);
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
        
        //Display the data
        $this->render();
    }
}
