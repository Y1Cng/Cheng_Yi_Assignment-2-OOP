<?php
/**
 * Plane with shared energy logic.
 * @author Yi Cheng
 * @version 1.0
 */
class Plane extends AirVehicle
{
    use EnergyUse; // Use shared energy trait

    /**
     * Initialize plane with flight height and energy defaults.
     * @param string $name Plane name
     * @param float $weight Plane weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param int $maxFlightHeight Max flight height (meters)
     */
    public function __construct(string $name, float $weight, int $maxSpeed, int $maxFlightHeight)
    {
        parent::__construct($name, $weight, $maxSpeed, $maxFlightHeight);
        $this->energyConsumptionPerKm = 2; // 200L per 100km
        $this->energyUnit = "L"; // Liter (aviation fuel)
    }

    /**
     * Start the plane with turbine detail.
     * @return string
     */
    public function start(): string
    {
        return "{$this->name} (plane) starts the turbine, ready to fly - " . parent::start();
    }
}