<?php
require_once("functions.php");
require_once("Model/Car.php");
require_once("Manager/CarManager.php");

//Refaire cette ligne partout ou on aura besoin des fonctions dans CarManager
//C'est comme si on introduisait le nouvel objet 
$carManager = new CarManager();
$cars = $carManager->selectAll();

$title = "Bienvenue dans le Garage";
require_once("header.php");
?>
<h1>Listes des Voitures</h1>
<div class="d-flex flex-wrap">
    <?php foreach ($cars as $car): ?>
        <div class="col-4 d-flex p-3 justify-content-center">
            <img src="images/<?= $car->getImage() ?>" alt="<?= $car->getModel() ?>">
            <div class="p-2">
                <h2><?= $car->getModel() ?></h2>
                <p><?= $car->getBrand() ?>, <?= $car->getHorsePower() ?> chevaux</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
require_once("footer.php");
?>