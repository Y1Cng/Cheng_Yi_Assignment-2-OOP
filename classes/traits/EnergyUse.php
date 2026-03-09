<?php
/**
 * Energy consumption calculation and display.
 * @author Yi Cheng
 * @version 1.0
 */
trait EnergyUse
{
    protected float $energyConsumptionPerKm; // Energy per kilometer
    protected string $energyUnit; // Unit of energy (L/kw/h)

    /**
     * Calculate total energy consumption for a distance.
     * @param float $distance Travel distance in kilometers
     * @return float
     */
    public function calculateEnergyConsumption(float $distance): float
    {
        return $distance * $this->energyConsumptionPerKm;
    }

    /**
     * Format energy use information for a distance.
     * @param float $distance Travel distance in kilometers
     * @return string
     */
    public function showEnergyUse(float $distance): string
    {
        $totalConsumption = $this->calculateEnergyConsumption($distance);
        return "{$this->name} uses {$totalConsumption}{$this->energyUnit} of energy for {$distance}km travel";
    }
}