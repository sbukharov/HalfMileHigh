<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{

  public function countForDates($array)
  {
    $countForDate = array();
    foreach ($array as $key=>$value) {
      // Initialize counts to 0
      $countForDate[$value['date']] = 0;
    }

    foreach ($array as $key=>$value) {
      // Increment count for dates
      $countForDate[$value['date']] += 1;
    }

    $output = [];
    foreach ($countForDate as $key=>$value) {
      // Build date element per codeigniter format.
      $date = array('date'=>$key, 'count'=>$value);
      // Append date.
      $output[] = $date;
    }

    return $output;
  }


	public function index()
	{
		$this->data['pagebody'] = 'homepage';
    // build the list of authors, to pass on to our view
    $flightsrc = $this->flightsmdl->all();
    // pass on the data to present, as the "authors" view parameter
    $this->data['flights'] = $flightsrc;
    $this->data['datearr'] = $this->countForDates($flightsrc);
		$this->render();
	}
}
