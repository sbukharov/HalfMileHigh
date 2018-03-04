<?php

require_once(APPPATH . 'models/Plane.php');
require_once(APPPATH . 'models/Wacky.php');

/**
 * This is a fleet model that stores information about the airplanes available
 * to Dove Airlines, including their id, make, model, price, # seats, reach,
 * cruise speed, takeoff speed, and hourly cost to operate.
 *
 * @author Sergey Bukharov, Karl Diab, Tim Davis, Jonathan Heggen, Kuanysh Boranbayev
 */
class Fleetmdl extends CSV_Model
{
    public $data;

    public function __construct()
    {
        parent::__construct(APPPATH . '/data/fleet.csv', 'id');
        $this->data = $this->all();
    }

    // provide form validation rules
    public function rules()
    {
        $config = array(
                ['field' => 'id', 'label' => 'id', 'rules' => 'alpha_numeric_spaces|max_length[15]'],
                ['field' => 'manufacturer', 'label' => 'manufacturer', 'rules' => 'alpha_numeric_spaces|max_length[15]'],
                ['field' => 'model', 'label' => 'model', 'rules' => 'alpha_numeric_spaces|max_length[15]'],
                ['field' => 'price', 'label' => 'price', 'rules' => 'integer|max_length[25]'],
                ['field' => 'seats', 'label' => 'seats', 'rules' => 'integer|max_length[4]'],
                ['field' => 'reach', 'label' => 'reach', 'rules' => 'integer|max_length[10]'],
                ['field' => 'cruise', 'label' => 'cruise', 'rules' => 'integer|max_length[10]'],
                ['field' => 'takeoff', 'label' => 'takeoff', 'rules' => 'integer|max_length[6]'],
                ['field' => 'hourly', 'label' => 'hourly', 'rules' => 'integer|max_length[6]'],
            );
        return $config;
    }
}
