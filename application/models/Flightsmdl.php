<?php

/**
 * This is the Flights model that represents the flights currently available at our 
 * airport, along with their source and destination, aircraft code, and date of 
 * departure.
 *
 * @author Sergey
 */
class Flightsmdl extends CI_Model
{
        //Base airport from which all flights begin.
        var $baseApt = 'YYD';

	// The data comes represents various flights going from our base airport to other cities
	var $data = array(
		'0'	 => array('from'	 => 'YYD', 'to'	 => 'YPZ',
			'distance'	 => '16700', 'date' => '2017-10-05', 'departure'=>'900', 'arrival'=>'1100', 'accode' => 'd0'),
		'1'	 => array('from'	 => 'YYD', 'to'	 => 'YDL',
			'distance'	 => '18400', 'date' => '2017-10-05', 'departure'=>'1000', 'arrival'=>'1500', 'accode' => 'd1'),
		'2'	 => array('from'	 => 'YDL', 'to'	 => 'YYD',
			'distance'	 => '6900', 'date' => '2017-10-01', 'departure'=>'1100', 'arrival'=>'1400', 'accode' => 'd2'),
		'3'	 => array('from'	 => 'YPZ', 'to'	 => 'YYD',
			'distance'	 => '17800', 'date' => '2017-09-28', 'departure'=>'1200', 'arrival'=>'1600', 'accode' => 'd3'),
		'2'	 => array('from'	 => 'YYD', 'to'	 => 'ZST',
			'distance'	 => '12300', 'date' => '2017-10-03', 'departure'=>'1300', 'arrival'=>'1800', 'accode' => 'd4'),
		'3'	 => array('from'	 => 'ZST', 'to'	 => 'YYD',
			'distance'	 => '7800', 'date' => '2017-09-27', 'departure'=>'1400', 'arrival'=>'1900', 'accode' => 'd5'));

        
        //ZST
	// Constructor
	public function __construct()
	{
		parent::__construct();

		// inject each "record" key into the record itself, for ease of presentation
		foreach ($this->data as $key => $record)
		{
			$record['key'] = $key;
			$this->data[$key] = $record;
		}
	}

	// Retrieve a single flight data point, by index
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// Retrieve all of the flight data
	public function all()
	{
		return $this->data;
	}
        
        // Retrieve the base airport
	public function getBaseApt()
	{
		return $this->baseApt;
	}

        // Retrieve all of the destination airports
	public function getDestApt()
	{
            //count array created
            $countForDest = array();
            
            //iterate through, determining number of occurences of the 'to' field,
            //and populating count array
            foreach ($this->data as $key=>$value) {
              if (isset($countForDest[$value['to']])) {
                $countForDest[$value['to']] += 1;
              } else {
                $countForDest[$value['to']] = 1;
              }
            }
            
            //output array created
            $result = [];
            
            //using count array, populates output array with values and occurencecs
            foreach ($countForDest as $key=>$value) {
              $destcount = array('to'=>$key, 'count'=>$value);
              // Append destination
              $result[] = $destcount;
            }
            
            return $result;
	}
}
