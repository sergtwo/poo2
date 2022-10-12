<?php

    require_once 'Vehicle.php';
    class Camion extends Vehicle

  {
    private int $storageCapacity;

    private int $load;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)

    {
    
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function checkLoad(): string

    {

        $sentence = "";
        while ($this->storageCapacity >= 6) {

            $this->storageCapacity--;
            return  $sentence .= "full  \n";

        }

        $sentence .= "in filling  \n";
        return $sentence;

    }

    public function getStorageCapacity(): int

    {

        return $this->storageCapacity;

    }

    public function setStorageCapacity(int $storageCapacity): void

    {
    
        if($storageCapacity < 6){

            $this->storageCapacity = $storageCapacity;

        }

    }

 }

