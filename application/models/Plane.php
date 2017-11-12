<?php
class Plane extends CI_Model {
    /* Data members representing all aspects of a task */
    private $id;
    private $make;
    private $model;
    private $price;
    private $seats;
    private $reach;
    private $cruise;
    private $takeoff;
    private $hourly;
    
    
    // If this class has a setProp method, use it, else modify the property directly
    public function __set($key, $value) {
        // if a set* method exists for this key, 
        // use that method to insert this value. 
        // For instance, setName(...) will be invoked by $object->name = ...
        // and setLastName(...) for $object->last_name = 
        $method = 'set' . str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $key)));
        if (method_exists($this, $method))
        {
                $this->$method($value);
                return $this;
        }
        // Otherwise, just set the property value directly.
        $this->$key = $value;
        return $this;
    }
    
    /* constructor */
    public function __construct() {
    }
    
    /* creates new plane */
    public function instance() {
        return new Plane;
    }
    
    /*Setter for task data member.*/
    public function setId($value) {
        $this->id = $value;
      }
      
    /*Setter for make data member.*/
    public function setMake($value) {
        $this->make = $value;
    }
       
    /*Setter for model data member.*/
    public function setModel($value) {
      $this->model = $value;
    }
    
    /*Setter for price data member.*/
    public function setPrice($value) {
        $this->price = $value;
    }
    /*Setter for seats data member.*/
    public function setSeats($value) {
        $this->seats = $value;
    }
    /*Setter for reach data member.*/
    public function setReach($value) {
      $this->reach = $value;
    }
    /*Setter for cruise data member.*/
    public function setCruise($value) {
        $this->cruise = $value;
    }
    /*Setter for takeoff data member.*/
    public function setTakeoff($value) {
        $this->takeoff = $value;
    }
      /*Setter for hourly data member.*/
    public function setHourly($value) {
        $this->hourly = $value;
    }
}
