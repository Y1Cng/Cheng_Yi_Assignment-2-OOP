<?php
/**
 * Water vehicle with draft depth info.
 * @author Yi Cheng
 * @version 1.0
 * @property float $draftDepth Draft depth in meters
 */
class WaterVehicle extends Vehicle
{
    protected float $draftDepth; // Water vehicle specific property

    /**
     * Initialize water vehicle with draft depth.
     * @param string $name Vehicle name
     * @param float $weight Vehicle weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param float $draftDepth Draft depth (meters)
     */
    public function __construct(string $name, float $weight, int $maxSpeed, float $draftDepth)
    {
        parent::__construct($name, $weight, $maxSpeed);
        $this->draftDepth = $draftDepth;
    }

    /**
     * Describe movement including draft depth.
     * @return string
     */
    public function move(): string
    {
        return parent::move() . " with a draft depth of {$this->draftDepth} meters on water";
    }

    public function getDraftDepth(): float
    {
        return $this->draftDepth;
    }
}