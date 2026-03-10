<?php
/**
 * Ship with shared energy logic.
 * @author Yi Cheng
 * @version 1.0
 */
class Ship extends WaterVehicle
{
    use EnergyUse; // Use shared energy trait

    /**
     * Initialize ship with draft depth and energy defaults.
     * @param string $name Ship name
     * @param float $weight Ship weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     * @param float $draftDepth Draft depth (meters)
     */
    public function __construct(string $name, float $weight, int $maxSpeed, float $draftDepth)
    {
        parent::__construct($name, $weight, $maxSpeed, $draftDepth);
        $this->energyConsumptionPerKm = 0.5; // 50kw per 100km
        $this->energyUnit = "kw"; // Kilowatt (electricity/diesel)
    }

    /**
     * Start the ship with propeller detail.
     * @return string
     */
    public function start(): string
    {
        return "{$this->name} (ship) starts the propeller, ready to sail - " . parent::start();
    }
}