<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author sergey
 */
class Fleetmdl extends CI_Model
{

	// The data comes from http://www.imdb.com/title/tt0094012/
	// expressed using long-form array notaiton in case students use PHP 5.x
	var $data = array(
	'0'	 => array('id' => '0', 'make'	 => 'Boeing', 'model'	 => '747',
		'price'	 => 1400, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500),
	'1'	 => array('id' => '1','make'	 => 'Loghueed Martin', 'model'	 => 'Arrow',
		'price'	 => 700, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500),
	'2'	 => array('id' => '2','make'	 => 'Boeing', 'model'	 => 'Model 4',
		'price'	 => 600, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500),
	'3'	 => array('id' => '3','make'	 => 'Boeing', 'model'	 => 'T-148',
		'price'	 => 4000, 'seats' => 100, 'reach' => 55000, 'cruise' => 750, 
		'takeoff' => 350, 'hourly' => 2500));

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

	// retrieve a single quote, null if not found
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
