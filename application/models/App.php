
<?php

/**
 * Domain-specific lookup tables
 */
class App extends CI_Model
{

	// flight flags
	private $flags = [
    1 => 'Urgent'
  ];
	
	// flight status
	private $statuses = [
		1	 => 'in progress',
		2	 => 'complete',
	];

	public function __construct()
	{
		parent::__construct();
	}

	public function flag($which = null)
	{
		return isset($which) ?
			(isset($this->flags[$which]) ? $this->flags[$which] : '') :
	    $this->flags;
	}

  public function status($which = null)
	{
		return isset($which) ?
			(isset($this->statuses[$which]) ? $this->statuses[$which] : '') :
			$this->statuses;
	}

}
