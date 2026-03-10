<?php
/**
 * Air vehicle with max flight height.
 * @author Yi Cheng
 * @version 1.0
 * @property int $maxFlightHeight Max flight height in meters
 */
class AirVehicle extends Vehicle
{
    protected int $maxFlightHeight; // Air vehicle specific property

    /**
     * Initialize air vehicle with flight height.
     * @param string $name Vehicle name
     * @param float $weight Vehicle weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param int $maxFlightHeight Max flight height (meters)
     */
    public function __construct(string $name, float $weight, int $maxSpeed, int $maxFlightHeight)
    {
        parent::__construct($name, $weight, $maxSpeed);
        $this->maxFlightHeight = $maxFlightHeight;
    }

    /**
     * Describe movement including flight height.
     * @return string
     */
    public function move(): string
    {
        return parent::move() . " at a max flight height of {$this->maxFlightHeight} meters in the air";
    }

    public function getMaxFlightHeight(): int
    {
        return $this->maxFlightHeight;
    }
}