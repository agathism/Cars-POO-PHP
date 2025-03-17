<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Entity/Car.php'; 
    require_once 'functions.php';
    require_once 'connectDB.php';
    ?>
    <?php
    $pdo = connectDB();
    $cars = selectAllCars($pdo);
    
    ?>
</body>

</html>