<?php

/**
 * This is a fleet model that stores information about the airplanes available 
 * to Dove Airlines, including their id, make, model, price, # seats, reach, 
 * cruise speed, takeoff speed, and hourly cost to operate.
 *
 * @author Karl
 */
class Fleetmdl extends CI_Model
{

	// The data was invented for the purposes of this assignment.
	var $data = array(
	'd0'	 => array('id' => 'd0', 'make'	 => 'Boeing', 'model'	 => '747',
		'price'	 => 1400, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500),
	'd1'	 => array('id' => 'd1','make'	 => 'Loghueed Martin', 'model'	 => 'Arrow',
		'price'	 => 700, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500),
	'd2'	 => array('id' => 'd2','make'	 => 'Boeing', 'model'	 => 'Model 4',
		'price'	 => 600, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500),
	'd3'	 => array('id' => 'd3','make'	 => 'Boeing', 'model'	 => 'T-148',
		'price'	 => 4000, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500));

	// Constructor for this object.
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

	// Retrieve a single data entry, returns null if not found.
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// Retrieve all fleet model data entries. Results in all airplane entries.
	public function all()
	{
		return $this->data;
	}
    
    
    // provide form validation rules
    public function rules()
    {
        $config = array(
            ['field' => 'id', 'label' => 'id', 'rules' => 'alpha_numeric_spaces|max_length[4]'],
            ['field' => 'make', 'label' => 'make', 'rules' => 'alpha_numeric_spaces|max_length[12]'],
            ['field' => 'model', 'label' => 'model', 'rules' => 'alpha_numeric_spaces|max_length[12]'],
            ['field' => 'price', 'label' => 'price', 'rules' => 'integer|less_than[6]'],
            ['field' => 'seats', 'label' => 'seats', 'rules' => 'integer|less_than[4]'],
            ['field' => 'reach', 'label' => 'reach', 'rules' => 'integer|less_than[10]'],
            ['field' => 'cruise', 'label' => 'cruise', 'rules' => 'integer|less_than[10]'],
            ['field' => 'takeoff', 'label' => 'takeoff', 'rules' => 'integer|less_than[6]'],
            ['field' => 'hourly', 'label' => 'hourly', 'rules' => 'integer|less_than[6]'],
        );
        return $config;
    }
    

}
