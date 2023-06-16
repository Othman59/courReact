<?php

require('BDD.php');

class RestaurantModel
{
    private $bdd;
    public function __construct()
    {
        $res = new BDD();
        $this->bdd = $res->getBdd();

    }

    function getAllRestaurants(){
        $req = $this->bdd->prepare('Select * FROM restaurant');
        $req->execute();

        return $req->fetchAll((PDO::FETCH_ASSOC));
    }

 }
