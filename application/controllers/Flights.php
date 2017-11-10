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
            $this->data['pagebody'] = 'flights';
            
            // build the list of flights, to pass on to our view
            $source = $this->flightsmdl->all();
            
            // pass on the data to present, as the "flights" view parameter
            $this->data['flights'] = $source;
            
            //render the page
            $this->render();
	}

}
