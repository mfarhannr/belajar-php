<?php

class car
{
    public $nameCar;
    public $typeCar;
    public $colorCar;

    public function __construct($nameCar, $typeCar, $colorCar)
    {
        $this->nameCar = $nameCar;
        $this->typeCar = $typeCar;
        $this->colorCar = $colorCar;
    }

    public function detailCar()
    {
        echo "Mobil saat ini adalah   " . $this->nameCar . " tipe mobilnya " . $this->typeCar . " warna mobilnya adalah " . $this->colorCar;
    }
}
$car = new Car("Civic turbo", "sports", "greentea");
$car->detailCar();