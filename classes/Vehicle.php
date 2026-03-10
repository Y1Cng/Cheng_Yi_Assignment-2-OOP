<?php
/**
 * Base vehicle with name, weight, and max speed.
 * @author Yi Cheng
 * @version 1.0
 * @property string $name Vehicle name
 * @property float $weight Vehicle weight in tons
 * @property int $maxSpeed Max speed in km/h
 */
class Vehicle
{
    // 3 core properties: Describe basic characteristics of all vehicles
    protected string $name;
    protected float $weight;
    protected int $maxSpeed;

    /**
     * Initialize core vehicle properties.
     * @param string $name Vehicle name
     * @param float $weight Vehicle weight (tons)
     * @param int $maxSpeed Max speed (km/h)
     */
    public function __construct(string $name, float $weight, int $maxSpeed)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->maxSpeed = $maxSpeed;
    }

    // 3 core methods: Describe basic behaviors of all vehicles
    /**
     * Start the vehicle.
     * @return string
     */
    public function start(): string
    {
        return "{$this->name} has started, ready to operate";
    }

    /**
     * Describe movement with max speed.
     * @return string
     */
    public function move(): string
    {
        return "{$this->name} is moving at a max speed of {$this->maxSpeed} km/h";
    }

    /**
     * Stop the vehicle.
     * @return string
     */
    public function stop(): string
    {
        return "{$this->name} has stopped operating";
    }

    // Getter methods: Access protected properties from child classes/outside
    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}