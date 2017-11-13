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
    * Returns json airlines by id from wacky server.
    */
    public function getAirlines()
    {
        $response = file_get_contents(WACKY_AIRLINES_URL);
    }

    /*
    * Returns json airports from wacky server.
    */
    public function getAirports()
    {
        $response = file_get_contents(WACKY_AIRPORTS_URL);
        return $response;
    }

    /*
    * Returns json airplanes from wacky server.
    */
    public function getAirplanes()
    {
        $response = file_get_contents(WACKY_AIRPLANES_URL);
        return $response;
    }

    /*
    * Returns json regions from wacky server.
    */
    public function getRegions()
    {
        $response = file_get_contents(WACKY_REGIONS_URL);
        return $response;
    }

    /*
    * Returns json airline by id from wacky server.
    */
    public function getAirline(String $id)
    {
        $response = file_get_contents(WACKY_AIRLINES_URL . $id);
    }

    /*
    * Returns json airport by id from wacky server.
    */
    public function getAirport(String $id)
    {
        $response = file_get_contents(WACKY_AIRPORTS_URL . $id);
        return $response;
    }

    /*
    * Returns json airplane by id from wacky server.
    */
    public function getAirplane(String $id)
    {
        $response = file_get_contents(WACKY_AIRPLANES_URL . $id);
        return $response;
    }

    /*
    * Returns json region by id from wacky server.
    */
    public function getRegion(String $id)
    {
        $response = file_get_contents(WACKY_REGIONS_URL . $id);
        return $response;
    }
}
