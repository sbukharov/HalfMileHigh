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
        var $baseApt = 'VDA (Vancouver Dove Airport)';

	// The data comes represents various flights going from our base airport to other cities
	var $data = array(
		'0'	 => array('from'	 => 'VDA (Vancouver Dove Airport)', 'to'	 => 'MIX (Montreal Airport)',
			'distance'	 => '16700', 'date' => '2017-10-05', 'accode' => 'd0'),
		'1'	 => array('from'	 => 'VDA (Vancouver Dove Airport)', 'to'	 => 'SYC (Seattle International Airport)',
			'distance'	 => '18400', 'date' => '2017-10-05', 'accode' => 'd1'),
		'2'	 => array('from'	 => 'VDA (Vancouver Dove Airport)', 'to'	 => 'WVA (Washington International Airport)',
			'distance'	 => '6900', 'date' => '2017-10-01', 'accode' => 'd2'),
		'3'	 => array('from'	 => 'VDA (Vancouver Dove Airport)', 'to'	 => 'IIA (Ibiza Airport)',
			'distance'	 => '17800', 'date' => '2017-09-28', 'accode' => 'd3'));

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
