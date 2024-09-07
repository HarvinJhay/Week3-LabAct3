<?php

// Base Vehicle class
class Vehicle {
    protected $make;
    protected $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public final function getDetails() {
        return "Make: $this->make<br>Model: $this->model<br>Year: $this->year<br>";
    }

    public function describe() {
        return "This is a vehicle.<br>";
    }
}

// Car class that extends Vehicle
class Car extends Vehicle {
    protected $numberOfDoors;

    public function __construct($make, $model, $year, $numberOfDoors) {
        parent::__construct($make, $model, $year);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function describe() {
        return "This is a Sports car with $this->numberOfDoors doors.<br>";
    }
}

// Final Motorcycle class that extends Vehicle
final class Motorcycle extends Vehicle {

    public function describe() {
        return "This is a Scooter type motor.<br>";
    }
}

// ElectricVehicle interface
interface ElectricVehicle {
    public function chargeBattery();
}

// ElectricCar class that extends Car and implements ElectricVehicle
class ElectricCar extends Car implements ElectricVehicle {
    private $batteryLevel;

    public function __construct($make, $model, $year, $numberOfDoors, $batteryLevel = 100) {
        parent::__construct($make, $model, $year, $numberOfDoors);
        $this->batteryLevel = $batteryLevel;
    }

    public function chargeBattery() {
        $this->batteryLevel = 100;
        return "Battery fully charged.<br>";
    }

    public function describe() {
        return "This car is powered by Electricity it has  $this->numberOfDoors doors and a battery level of $this->batteryLevel%.<br>";
    }
}

// Testing the implementation

$car = new Car("Toyota", "Supra", 2020, 2);
echo $car->getDetails();
echo $car->describe();

echo "<br>";  // Add a blank line between outputs

$motorcycle = new Motorcycle("Honda Click", "Click 125", 2015);
echo $motorcycle->getDetails();
echo $motorcycle->describe();

echo "<br>";  // Add a blank line between outputs

$electricCar = new ElectricCar("Tesla", "CyberTruck ", 2022, 4, 50);
echo $electricCar->getDetails();
echo $electricCar->describe();
echo $electricCar->chargeBattery();
echo $electricCar->describe();

?>
