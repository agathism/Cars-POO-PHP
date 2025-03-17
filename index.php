<?php
require_once("functions.php");
require_once("connectDB.php");
require_once("Entity/Car.php");
$pdo = connectDB();
$cars = selectAllCars($pdo);
$title = "Bienvenue dans le Garage";
require_once("header.php");
?>
<h1>Listes des Voitures</h1>
<div class="d-flex flex-wrap">
    <?php foreach ($cars as $car): ?>
        <div class="col-4 d-flex p-3 justify-content-center">
            <img src="images/<?php echo $car->getImage() ?>" alt="<?php echo $car->getModel() ?>">
            <div class="p-2">
                <h2><?php echo $car->getModel() ?></h2>
                <p><?php echo $car->getBrand() ?>, <?php echo $car->getHorsePower() ?> chevaux</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
require_once("footer.php");
?>