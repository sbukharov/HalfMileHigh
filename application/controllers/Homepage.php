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
            //create new output array of style date : # occurences
            //cycle through given dates, initializing to date : 1 except if duplicate
            //if duplicate, add +1 to occurence
            //return array
            
            $outarray = array();
            //array(	'0'	 => array('id' => '666', 'make'	 => 'Boeing')

            $count = -1;
            foreach ($array as $key=>$value) {
                if (!isset($outarray[$value['date']])) {
                    
                    $outarray[++$count] = array('date' => $value['date'], 
                        'count' => 1);
                } else {
                    foreach ($outarray as $key2 => $value2 ) {
                        if ($value2['date'] == $value['date']) {
                            $value2['count'] += 1;
                        }
                    }
                }
            }
            
            return $outarray;
        }
        
        
	public function index()
	{
		$this->data['pagebody'] = 'homepage';
                
                // build the list of authors, to pass on to our view
                $flightsrc = $this->flightsmdl->all();
                
                // pass on the data to present, as the "authors" view parameter
                $this->data['flights'] = $flightsrc;
                
                
                $this->data['datearr'] = $this->array_icount_values($flightsrc);
                
                //echo "DUMPING";
                //var_dump($this->array_icount_values($flightsrc));
                
                
		$this->render();
	}
        


}
