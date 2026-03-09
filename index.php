<?php
/**
 * Entry point: autoload classes and demo vehicle behaviors.
 * @author Yi Cheng
 * @version 1.0
 */

// Enable error display for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Automatic class loader for classes and traits
spl_autoload_register(function ($className) {
    // Define all possible file paths for classes and traits
    $possiblePaths = [
        // Core vehicle classes (Level 1 and 2)
        __DIR__ . '/classes/' . $className . '.php',
        // Trait file
        __DIR__ . '/classes/traits/' . $className . '.php'
    ];

    // Loop through possible paths to find the class file
    foreach ($possiblePaths as $filePath) {
        if (file_exists($filePath)) {
            require_once $filePath;
            // Exit loop once file is found to avoid redundant checks
            return;
        }
    }

    // Show clear error if class file is not found
    die("Error: Could not load class file for '{$className}' - Check if the file exists in classes/ or classes/traits/");
});

// Test 1: Instantiate vehicle examples
$sedan = new Car("Toyota Camry", 1.5, 200);
$motorbike = new Motorcycle("Yamaha R3", 0.2, 250);
$cargoShip = new Ship("Maersk Cargo", 50000, 40, 12.5);
$passengerPlane = new Plane("Boeing 737", 40, 900, 10000);

// Store all instances in an array for loop testing
$vehicles = [$sedan, $motorbike, $cargoShip, $passengerPlane];

// Test 2: Call core methods (start/move/stop) for all vehicles
echo "<h2>Vehicle Core Behavior Test</h2>";
foreach ($vehicles as $vehicle) {
    echo "<p><strong>" . $vehicle->getName() . ":</strong><br>";
    echo $vehicle->start() . "<br>";
    echo $vehicle->move() . "<br>";
    echo $vehicle->stop() . "</p>";
    echo "<hr>";
}

// Test 3: Call Trait methods (energy consumption) for all vehicles
// Test with 100km travel distance for unified comparison
echo "<h2>Vehicle Energy Consumption Test (100km travel)</h2>";
$testDistance = 100;
foreach ($vehicles as $vehicle) {
    echo "<p><strong>" . $vehicle->getName() . ":</strong><br>";
    echo $vehicle->showEnergyUse($testDistance) . "</p>";
    echo "<hr>";
}

// Test 4: Call subclass-specific getter methods
echo "<h2>Subclass Specific Property Test</h2>";
echo "<p><strong>" . $sedan->getName() . ":</strong> " . $sedan->getWheelCount() . " wheels</p>";
echo "<p><strong>" . $cargoShip->getName() . ":</strong> " . $cargoShip->getDraftDepth() . "m draft depth</p>";
echo "<p><strong>" . $passengerPlane->getName() . ":</strong> " . $passengerPlane->getMaxFlightHeight() . "m max flight height</p>";