<?php

interface CarService
{
    public function getCost();

    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic inspection';
    }
}

class OilChange implements CarService
{

    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 29;
    }

    public function getDescription()
    {
        return $this->carService->getDescription().' '.'and oil change';
    }
}

class TireRotation implements CarService
{

    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 15;
    }

    public function getDescription()
    {
        return $this->carService->getDescription().' '.'and a tire rotation';
    }
}

$service =  (new TireRotation(new OilChange(new BasicInspection())));

echo $service->getDescription();