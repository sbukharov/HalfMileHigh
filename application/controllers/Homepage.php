<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        public function array_icount_values($array) {
            $count = 0;
            foreach ($array as $key=>$value) {
                if ($value ['date'] == '2017-10-05') {
                    $count++;
                }
            }
            return $count;
        }
        
	public function index()
	{
		$this->data['pagebody'] = 'homepage';
                
                // build the list of authors, to pass on to our view
                $flightsrc = $this->flightsmdl->all();
                
                // pass on the data to present, as the "authors" view parameter
                $this->data['flights'] = $flightsrc;
                
                $this->data['oct5'] = $this->array_icount_values($flightsrc);
                
		$this->render();
	}
        


}
