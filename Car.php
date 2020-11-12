<?php

class Car {
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): int {
        $this->energyLevel = $energyLevel;
    }

    public function forward() {
        if ($this->currentSpeed > 0) {
            return 'Let\'s go ! ';
        } elseif ($this->currentSpeed <= 0) {
            return 'Start the car. ';
        }
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
            }
        $sentence .= "I'm stopped ! ";
        return $sentence;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }
    
    public function getCurrentSpeed(int $currentSpeed) {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(int $energyLevel) {
        $this->energyLevel = $energyLevel;
    }
}