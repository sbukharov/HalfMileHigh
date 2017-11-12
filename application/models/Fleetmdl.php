<?php

/**
 * This is a fleet model that stores information about the airplanes available 
 * to Dove Airlines, including their id, make, model, price, # seats, reach, 
 * cruise speed, takeoff speed, and hourly cost to operate.
 *
 * @author Sergey Bukharov, Karl Diab, Tim Davis, Jonathan Heggen, Kuanysh Boranbayev
 */
class Fleetmdl extends CSV_Model
{
	var $data;
	// Constructor
	public function __construct()
	{
		parent::__construct(APPPATH . '/data/fleet.csv', 'key');
		
		$this->data = $this->all();
	}

	// Retrieve a single data entry, returns null if not found.
	public function getPlane($id)
	{
		$result = array();
		foreach ($this->all() as $plane) {
			if (strcasecmp($plane->id, $id) == 0) {
				$result = (array)$plane;
				break;
			} else {
				$result = null;
			}
		}
		return $result;
	}	
}
