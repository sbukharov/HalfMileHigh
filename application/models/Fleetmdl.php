<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author sergey
 */
class Fleet extends CI_Model
{

	// The data comes from http://www.imdb.com/title/tt0094012/
	// expressed using long-form array notaiton in case students use PHP 5.x
	var $data = array(
		'0'	 => array('id' => '666', 'make'	 => 'Boeing', 'model'	 => '747',
			'cost'	 => '1400000'),
		'1'	 => array('id' => '667','make'	 => 'Loghueed Martin', 'model'	 => 'Arrow',
			'cost'	 => '600000'),
		'2'	 => array('id' => '668','make'	 => 'Boeing', 'model'	 => 'Model 4',
			'cost'	 => '1100000'),
		'3'	 => array('id' => '669','make'	 => 'Boeing', 'model'	 => 'T-148',
			'cost'	 => '400000'));

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
