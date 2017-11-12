<?php
define('BASE_APT', 'YYD');
/**
 * This is the Flights model that represents the flights currently available at our 
 * airport, along with their source and destination, aircraft code, and date of 
 * departure.
 *
 * @author Sergey Bukharov, Karl Diab, Tim Davis, Jonathan Heggen, Kuanysh Boranbayev
 */
class Flightsmdl extends CSV_Model
{
	// Constructor
	public function __construct()
	{
		parent::__construct(APPPATH . '/data/flights.csv', 'id');
	}

	// Retrieve the base airport
	public function getBaseApt()
	{
		$baseApt = BASE_APT;
		return $baseApt;
	}
	
	// Retrieve all of the destination airports
	public function getDestApt()
	{
			//count array created
			$countForDest = array();
			
			//iterate through, determining number of occurences of the 'to' field,
			//and populating count array
			foreach ($this->all() as $key=>$value) {
				if (isset($countForDest[$value->to])) {
					$countForDest[$value->to] += 1;
				} else {
					$countForDest[$value->to] = 1;
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
