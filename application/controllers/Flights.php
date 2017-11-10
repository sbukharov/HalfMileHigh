<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * This class represents an information flights page on our airport info site.
 * @author Kuanysh
 */
class Flights extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://comp4711.local/flights
	 */
	public function index()
	{        
        
            //validate current role & generate content accordingly
            $role = $this->session->userdata('userrole');
            if ($role == ROLE_OWNER) {
                $this->data['modebutton'] = '<a href="/roles/actor/Guest" class="btn btn-info" role="button">Mode: Admin</a>';
                $this->data['modebutton'] .= $this->parser->parse('addflight',[], true);
                $this->data['pagebody'] = 'flightsadmin';
            } else {
                $this->data['modebutton'] = '<a href="/roles/actor/Owner" class="btn btn-info" role="button">Mode: User</a>';
            }
        
            $this->data['pagebody'] = 'flights';
            
            // build the list of flights, to pass on to our view
            $source = $this->flightsmdl->all();
            
            // pass on the data to present, as the "flights" view parameter
            $this->data['flights'] = $source;
        
            //render the page
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
