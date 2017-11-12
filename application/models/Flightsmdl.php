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
        //Base airport from which all flights begin.
        var $baseApt = 'YYD';
	// The data comes represents various flights going from our base airport to other cities
	var $data = array();
        
	// Constructor
	public function __construct()
	{
		parent::__construct(APPPATH . '/data/flights.csv', 'key');
                
                $this->data = $this->all();
	}
        
        // Retrieve a single data entry, returns null if not found.
	public function getFlight($id)
	{
		$result = array();
		foreach ($this->all() as $flight) {
			if (strcasecmp($flight->id, $id) == 0) {
				$result = (array)$flight;
				break;
			} else {
				$result = null;
			}
		}
		return $result;
	}

	// Retrieve a single flight data point, by index, used only with DataMapper
	public function get($which, $unused)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
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

    
    // provide form validation rules
    public function rules()
    {
        $config = array(
            ['field' => 'from', 'label' => 'id', 'rules' => 'alpha_numeric_spaces|max_length[25]'],
            ['field' => 'to', 'label' => 'make', 'rules' => 'alpha_numeric_spaces|max_length[25]'],
            ['field' => 'distance', 'label' => 'model', 'rules' => 'integer|less_than[10]'],
            ['field' => 'date', 'label' => 'price', 'rules' => 'alpha_numeric_spaces|max_length[10]'],
            ['field' => 'departure', 'label' => 'departure', 'rules' => 'integer|less_than[6]'],
            ['field' => 'arrival', 'label' => 'arrival', 'rules' => 'integer|less_than[6]'],
            ['field' => 'accode', 'label' => 'seats', 'rules' => 'alpha_numeric_spaces|max_length[4]'],
        );
        return $config;
    }
}
