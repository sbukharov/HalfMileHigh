<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*
 * This class represents the about page of our airport info site.
 * Currently empty.
 * 
 * @author Jonathan
 */
class About extends Application
{

        /**
        * About page for the application explaining the purpose of this website.
        *
        * Maps to the following URL
        * 		http://comp4711.local/about
        */
	public function index()
	{
		$this->data['pagebody'] = 'about';        
		$this->render();
	}

}
