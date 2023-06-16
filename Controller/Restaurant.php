<?php

require("../Model/RestaurantModel.php");

class Restaurant
{

    private $restaurantModel;

    public function __construct()
    {
        $this->restaurantModel = new RestaurantModel();
    }

    function getAllRestaurant()
    {
        return $this->restaurantModel->getAllRestaurants();
        

    }
    function addRestaurant($libelle, $numero, $adress) {
       $this->restaurantModel->addRestaurant($Libelle, $numero, $adress);
        }
    }



