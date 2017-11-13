<?php

use PHPUnit\Framework\TestCase;

require_once(APPPATH.'models/Flight.php');

class FlightTest extends TestCase
{
    private $CI;

    public function setUp()
    {
        $this->CI = &get_instance();
    }

    public function testInvalidDepartureTime() {
        $flight = new Flight();
        $this->expectException(Exception::class);
        $flight->departureTime = 2500;
    }

    public function testInvalidDepartureAirport() {
        $flight = new Flight();
        $this->expectException(Exception::class);
        $flight->departsFrom ="NotValidId";
    }

    public function testValidArrivalAirport() {
        $flight = new Flight();
        $flight->$arrive_to = 'XQU';
        $this->assertEquals($validCode, $flight->$arrive_to);
    }

    public function testValidDepartureAirport() {
        $flight = new Flight();
        $flight->$depart_from = 'XQU';
        $this->assertEquals($validCode, $flight->$depart_from);
    }

    public function testValidArrivalTime() {
        $flight = new Flight();
        $flight->arrivalTime = 1500;
        $this->assertEquals($validTime, $flight->arrivalTime);
    }

    public function testValidDepartureTime() {
        $flight = new Flight();
        $flight->departureTime = 1500;
        $this->assertEquals($validTime, $flight->departureTime);
    }

    public function testInvalidArrivalTime() {
        $flight = new Flight();
        $this->expectException(Exception::class);
        $flight->arrivalTime = -200;
    }
}
