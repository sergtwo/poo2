<?php

require_once 'Camion.php';

$camion = new Camion(6,'grey', 2, "fuel");
echo $camion->checkLoad();
echo '<br> Capacité de chargement du camion : ' . $camion->getStorageCapacity() . ' m/2' .  " <br> \n";
echo $camion->checkLoad();
//Moving camion
echo $camion->forward();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' .  " <br> \n";
echo $camion->brake();
// require_once 'Car.php';
// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

let $chargementCamion = $camion->getStorageCapacity();




// /var_dump($bike);

// $bike->setColor('blue');
// $bike->setCurrentSpeed(15);
//var_dump($bike); // then, another dump.
//echo $bike->getColor();



//var_dump($bike);
//$bike->dump();

//var_dump(Car::ALLOWED_ENERGIES);