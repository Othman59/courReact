<?php
require('./Restaurant.php');
$restaurant = new Restaurant();

switch ($_GET['action']){
    case 'get_restaurants' :
        $restaurants = $restaurant->getAllRestaurant();
        include ('../View/restaurants.php');
        break;
    case 'add_restaurant':
        include ('../View/restaurantForm.php');
        break;
    case 'insert_restaurant' :
        $libelle = $_POST['libelle'];
        $numero = $_POST['numero'];
        $adresse = $_POST['adresse'];
        $restaurant->addRestaurant($libelle, $numero, $adresse);
        header('Location: Route.php?action=get_restaurants');
        break;
    case 'get_restaurant' :
        $rest = $restaurant->getRestaurantById($_GET['id']);
        include ('../View/restaurantDetails.php');
        break;
    case 'modify_restaurant' :
        $rest = $restaurant->getRestaurantById($_GET['id']);
        include ('../View/restaurantUpdate.php');
        break;
    case 'update_restaurant' :
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $numero = $_POST['numero'];
        $adresse = $_POST['adresse'];
        $restaurant->updateRestaurant($id, $libelle, $numero, $adresse);
        header('Location: Route.php?action=get_restaurants');
    case 'remove_restaurant' :
        $id = $_GET['id'];
        $restaurant->deleteRestaurant($id);
        header('Location: Route.php?action=get_restaurants');
        break;
}

//Plat

require('./Plat.php');
$plat = new Plat();
switch ($action) {
    case 'get_plats':
        $plats = $plat->getAllPlat();
        // Utilisez la variable $plats pour faire ce que vous voulez ici
        break;
    // Ajoutez d'autres cas pour gérer d'autres actions si nécessaire
    default:
        // Cas par défaut si l'action n'est pas reconnue
        break;
}
