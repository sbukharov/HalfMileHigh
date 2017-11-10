<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * This class represents the fleet page of our airport info site.
 * @author Tim
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
        //validate current role & generate content accordingly
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_OWNER) {
            $this->data['modebutton'] = '<a href="/roles/actor/Guest" class="btn btn-info" role="button">Mode: Admin</a>';
            $this->data['modebutton'] .= $this->parser->parse('addfleet',[], true);
        } else {
            $this->data['modebutton'] = '<a href="/roles/actor/Owner" class="btn btn-info" role="button">Mode: User</a>';
        }
        
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
        
        //Display the data
        $this->render();
    }
    
    public function add()
    {
        //TODO: Actual database update. Below is from Mtce::add() [Lab 6]
        
        /**
        $task = $this->tasks->create();
        $this->session->set_userdata('task', $task);
        $this->showit();
        **/
    }
    
    public function edit($id = null)
    {
        //TODO: Actual database update. Below is from Mtce::edit() [Lab 6]
        
        /**if ($id == null)
            redirect('/mtce');
        $task = $this->tasks->get($id);
        $this->session->set_userdata('task', $task);
        $this->showit();*/
    }
    
}
