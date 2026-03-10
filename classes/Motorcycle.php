<?php
/**
 * Motorcycle with shared energy logic.
 * @author Yi Cheng
 * @version 1.0
 */
class Motorcycle extends LandVehicle
{
    use EnergyUse; // Use shared energy trait

    /**
     * Initialize motorcycle with wheel count and energy defaults.
     * @param string $name Motorcycle name
     * @param float $weight Motorcycle weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param int $wheelCount Number of wheels (default 2)
     */
    public function __construct(string $name, float $weight, int $maxSpeed, int $wheelCount = 2)
    {
        parent::__construct($name, $weight, $maxSpeed, $wheelCount);
        $this->energyConsumptionPerKm = 0.03; // 3L per 100km
        $this->energyUnit = "L"; // Liter (petrol)
    }

    /**
     * Start the motorcycle with ignition detail.
     * @return string
     */
    public function start(): string
    {
        return "{$this->name} (motorcycle) kicks the engine, ready to ride - " . parent::start();
    }
}