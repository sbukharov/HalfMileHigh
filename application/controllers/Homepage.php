<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{

  public function countForDates($array)
  {
    $countForDate = array();
    foreach ($array as $key=>$value) {
      if (isset($countForDate[$value['date']])) {
        $countForDate[$value['date']] += 1;
      } else {
        $countForDate[$value['date']] = 1;
      }
    }

    $result = [];
    foreach ($countForDate as $key=>$value) {
      // Build date element per codeigniter format.
      $date = array('date'=>$key, 'count'=>$value);
      // Append date.
      $result[] = $date;
    }

    return $result;
  }


	public function index()
	{
            $this->data['pagebody'] = 'homepage';
            // build the list of authors, to pass on to our view
            $flightsrc = $this->flightsmdl->all();
            // pass on the data to present, as the "authors" view parameter
            $this->data['flights'] = $flightsrc;
            $this->data['datearr'] = $this->countForDates($flightsrc);
            
            $this->data['sizeFleet'] = sizeof($this->fleetmdl->all());

            $this->data['baseAirport'] = $this->flightsmdl->getBaseApt();

            $this->data['airports'] = $this->flightsmdl->getDestApt();
            
            $this->render();
            
            
	}
}
