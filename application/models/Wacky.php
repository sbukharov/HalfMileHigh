<?php

/*
* Retrieving data from wacky server.
*/
class Wacky extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
    * Returns airlines from wacky server.
    */
    public function getAirlines()
    {
        return json_decode(file_get_contents(WACKY_AIRLINES_URL));
    }

    /*
    * Returns airports from wacky server.
    */
    public function getAirports()
    {
        return json_decode(file_get_contents(WACKY_AIRPORTS_URL));
    }

    /*
    * Returns airplanes from wacky server.
    */
    public function getAirplanes()
    {
        return json_decode(file_get_contents(WACKY_AIRPLANES_URL));
    }

    /*
    * Returns regions from wacky server.
    */
    public function getRegions()
    {
        return json_decode(file_get_contents(WACKY_REGIONS_URL));
    }

    /*
    * Returns airline by id from wacky server.
    */
    public function getAirline(String $id)
    {
        return json_decode(file_get_contents(WACKY_AIRLINES_URL . $id));
    }

    /*
    * Returns airport by id from wacky server.
    */
    public function getAirport(String $id)
    {
        return json_decode(file_get_contents(WACKY_AIRPORTS_URL . $id));
    }

    /*
    * Returns airplane by id from wacky server.
    */
    public function getAirplane(String $id)
    {
        return json_decode(file_get_contents(WACKY_AIRPLANES_URL . $id));
    }

    /*
    * Returns region by id from wacky server.
    */
    public function getRegion(String $id)
    {
        return json_decode(file_get_contents(WACKY_REGIONS_URL . $id));
    }
}
