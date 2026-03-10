<?php
/**
 * Car with shared energy logic.
 * @author Yi Cheng
 * @version 1.0
 */
class Car extends LandVehicle
{
    use EnergyUse; // Use shared energy trait

    /**
     * Initialize car with wheel count and energy defaults.
     * @param string $name Car name
     * @param float $weight Car weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param int $wheelCount Number of wheels (default 4)
     */
    public function __construct(string $name, float $weight, int $maxSpeed, int $wheelCount = 4)
    {
        parent::__construct($name, $weight, $maxSpeed, $wheelCount);
        $this->energyConsumptionPerKm = 0.08; // 8L per 100km
        $this->energyUnit = "L"; // Liter (petrol)
    }

    /**
     * Start the car with ignition detail.
     * @return string
     */
    public function start(): string
    {
        return "{$this->name} (car) ignites the engine, ready to drive - " . parent::start();
    }
}