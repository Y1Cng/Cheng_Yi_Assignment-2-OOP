<?php
/**
 * Land vehicle with wheel count.
 * @author Yi Cheng
 * @version 1.0
 * @property int $wheelCount Number of wheels
 */
class LandVehicle extends Vehicle
{
    protected int $wheelCount; // Land vehicle specific property

    /**
     * Initialize land vehicle with wheel count.
     * @param string $name Vehicle name
     * @param float $weight Vehicle weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param int $wheelCount Number of wheels
     */
    public function __construct(string $name, float $weight, int $maxSpeed, int $wheelCount)
    {
        parent::__construct($name, $weight, $maxSpeed);
        $this->wheelCount = $wheelCount;
    }

    /**
     * Describe movement including wheel count.
     * @return string
     */
    public function move(): string
    {
        return parent::move() . " with {$this->wheelCount} wheels on land";
    }

    public function getWheelCount(): int
    {
        return $this->wheelCount;
    }
}