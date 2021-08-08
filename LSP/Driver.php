<?php


class Driver
{
    /**
     * @var Car
     */
    private $car;

    public function __construct(Car $car)
    {

        $this->car = $car;
    }
    public function go(){
        $this->car->dirve();
    }
}
