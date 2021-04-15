<?php


require_once 'skateboard.php';

$skateboard= new skateboard('brown', 1);

require_once 'Bicycle.php';

$bycicle= new Bicycle('red',1);
echo $bycicle->forward();
var_dump($bycicle);


require_once 'Car.php';

$car = new Car('green', 4, 'electric',true);
echo $car->forward();
var_dump($car);


require_once 'camion.php';
$camion = new camion('green',3,0,'electric');
var_dump($camion);

echo $camion->fillLoad();

require_once 'vehicule.php';


require_once 'MotorWay.php';

$autoroute = new MotorWay();
$autoroute->addVehicles($car);
$autoroute->addVehicles($camion);

require_once 'PedestrianWay.php';

$ligne = new PedestrianWay();
$ligne->addVehicles($bycicle);
$ligne->addVehicles($skateboard);

require_once 'ResidentialWay.php';

$nationale = new ResidentialWay();
$nationale->addVehicles($bycicle);
$nationale->addVehicles($skateboard);
$nationale->addVehicles($camion);
$nationale->addVehicles($car);

$car->setParkBrake(true);
echo $car->start();
try {
    $car->setParkBrake(false);
}catch(Exception $e){
    echo "Exception oulala". $e->getMessage() . "n";
} finally {
    echo "Ma voiture roule comme un donut";
}

echo $car->start();



