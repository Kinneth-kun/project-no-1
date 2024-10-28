<!DOCTYPE html>
<html>
<head>
    <title>Page 5: Using Constants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 450px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid black;
            position: relative;
        }
        .container::before {
            top: -1px;
            left: -1px;
        }
        .container::after {
            bottom: -1px;
            right: -1px;
        }
        .container::before,
        .container::after {
            height: 20px;
            width: 1px;
        }

        h1 {
            font-size: 26px;
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }
        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        .back-link a:hover {
            color: #2980b9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #555;
            line-height: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Using Constants</h1>
        <?php
        // Defining constants
        define("PI", 3.14159);
        define("GRAVITY", 9.8);
        define("LIGHT_SPEED", 299792458);
        define("EARTH_RADIUS", 6371);
        define("PLANCK_CONSTANT", 6.62607015e-34);
        define("AVOGADRO", 6.02214076e23);
        define("GOLDEN_RATIO", 1.618033);
        define("E", 2.71828);
        define("BOLTZMANN_CONSTANT", 1.380649e-23);
        define("ATMOSPHERIC_PRESSURE", 101325);

        echo "<p>PI: " . PI . "</p>";
        echo "<p>Gravity: " . GRAVITY . " m/s²</p>";
        echo "<p>Speed of Light: " . LIGHT_SPEED . " m/s</p>";
        echo "<p>Earth Radius: " . EARTH_RADIUS . " km</p>";
        echo "<p>Planck's Constant: " . PLANCK_CONSTANT . " J·s</p>";
        echo "<p>Avogadro's Number: " . AVOGADRO . "</p>";
        echo "<p>Golden Ratio: " . GOLDEN_RATIO . "</p>";
        echo "<p>Euler's Number (e): " . E . "</p>";
        echo "<p>Boltzmann Constant: " . BOLTZMANN_CONSTANT . " J/K</p>";
        echo "<p>Atmospheric Pressure: " . ATMOSPHERIC_PRESSURE . " Pa</p>";
        ?>

        <div class="back-link">
            <a href="index.php">Back to Main Page</a>
        </div>

        <div class="footer">
            <p>Created by: Kinneth A. Daluag | Date Created: October 24, 2024</p>
        </div>
    </div>
</body>
</html>
