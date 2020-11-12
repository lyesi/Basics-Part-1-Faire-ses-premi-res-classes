<?php

class Bicycle {
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;

    public function __construct(string $color) {
        $this->color = $color;
    }

    public function forward() {
        $this->currentSpeed = 15;
        return "Go ! ";
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

    public function setCurrentSpeed(int $currentSpeed): void {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor() {
        return $this->color;
    }

    public function getCurrentSpeed() {
        return $this->currentSpeed;
    }

    public function getNbSeats() {
        return $this->nbSeats;
    }

    public function getNbWheels() {
        return $this->nbWheels;
    }
}
