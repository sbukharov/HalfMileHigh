<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author sergey
 */
class FlightsMdl extends CI_Model
{

	// The data comes from http://www.imdb.com/title/tt0094012/
	// expressed using long-form array notaiton in case students use PHP 5.x
	var $data = array(
		'0'	 => array('from'	 => 'Vancouver', 'to'	 => 'Montreal',
			'distance'	 => '16700', 'date' => '2017-10-05', 'accode' => 'd15472'),
		'1'	 => array('from'	 => 'Seattle', 'to'	 => 'Montreal',
			'distance'	 => '18400', 'date' => '2017-10-05', 'accode' => 'd13472'),
		'2'	 => array('from'	 => 'Vancouver', 'to'	 => 'Washington',
			'distance'	 => '6900', 'date' => '2017-10-01', 'accode' => 'd43272'),
		'3'	 => array('from'	 => 'Washington', 'to'	 => 'Montreal',
			'distance'	 => '17800', 'date' => '2017-09-28', 'accode' => 'd88472'));

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
