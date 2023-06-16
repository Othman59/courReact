<?php
include ('header.php');
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <h1>Ajout d'un plat</h1>
    </div>
    <form action="../Controller/Route.php?action=add_restaurant" method="POST">
        <div class="form-group">
            <label for="libelle">Libellé :</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" class="form-control" id="adresse" name="adresse" required>
        </div>
        <div class="form-group">
            <label for="numero">Numéro :</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
