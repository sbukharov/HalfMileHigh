<?php
include('Entity.php');

class Task extends Entity {
    private $flight;
    private $from;
    private $to;
    private $distance;
    private $date;
    private $accode;

    public function setFlight($flgiht) {
      $this->flight = $flight;
    }
  
    public function getFlight() {
      return $this->flight;
    }
  
    public function setFrom($from) {
      $this->from = $from;
    }
  
    public function getFrom() {
      return $this->from;
    }
  
    public function setTo($to) {
      $this->to = $to;
    }
  
    public function getTo() {
      return $this->to;
    }

    public function setAccode($accode) {
      $this->accode = $accode;
    }
  
    public function getAccode() {
      return $this->accode;
    }
}