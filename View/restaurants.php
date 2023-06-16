<?php
require('./Plat.php');
include 'header.php';
?>

<div class="container">
    <div class="d-flex justify-content-center">
        <h1>Plats</h1>
    </div>
    <div class="d-flex justify-content-end">
        <a href="../Controller/Route.php?action=add_restaurant"><button class="btn btn-primary">Ajouter Restaurant </button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Libelle</th>
                <th scope="col">Adresse</th>
                <th scope="col">Numéro</th>
                <th scope="col" style="width: 25%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $plat = new Plat(); // Création d'une instance de la classe Plat

            foreach ($restaurants as $r) {
                $plats = $plat->getPlatsByRestaurant($r['RE_Id']); // Utilisation de la méthode getPlatsByRestaurant() de la classe Plat pour obtenir les plats
            ?>
                <tr>
                    <td><?= $r['RE_Libelle'] ?></td>
                    <td><?= $r['RE_Adresse'] ?></td>
                    <td><?= $r['RE_Numero'] ?></td>
                    <td>
                        <a href="../Controller/Route.php?action=get_restaurant&id=<?= $r['RE_Id'] ?>">
                            <button class="btn btn-primary">Voir Détails</button>
                        </a>
                        <a href="../Controller/Route.php?action=modify_restaurant&id=<?= $r['RE_Id'] ?>">
                            <button class="btn btn-info">Modifier</button>
                        </a>
                        <a href="../Controller/Route.php?action=remove_restaurant&id=<?= $r['RE_Id'] ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
