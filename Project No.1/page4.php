<!DOCTYPE html>
<html>
<head>
    <title>Page 4: Math Functions</title>
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Math Functions Demonstration</h1>
        <?php
        // Declare five floating point numbers
        $float1 = 8.9;
        $float2 = -10.5;
        $float3 = 5.2;
        $float4 = 3.14;
        $float5 = 2.718;

        // Declare five whole numbers
        $int1 = 8;
        $int2 = 15;
        $int3 = 3;
        $int4 = 7;
        $int5 = 20;

        // Factorial function
        function factorial($n) {
            if ($n < 0) return "Undefined";
            if ($n === 0) return 1;
            $fact = 1;
            for ($i = 1; $i <= $n; $i++) {
                $fact *= $i;
            }
            return $fact;
        }

        // Using Math functions
        echo "<p>Absolute (int2): " . abs($int2) . "</p>";
        echo "<p>Square Root (float1): " . sqrt($float1) . "</p>";
        echo "<p>Round (float3): " . round($float3) . "</p>";
        echo "<p>Ceiling (float2): " . ceil($float2) . "</p>";
        echo "<p>Floor (float3): " . floor($float3) . "</p>";
        echo "<p>Power (float1, 2): " . pow($float1, 2) . "</p>";
        echo "<p>Max (float1, float2, int3): " . max($float1, $float2, $int3) . "</p>";
        echo "<p>Min (float1, float2, int4): " . min($float1, $float2, $int4) . "</p>";
        echo "<p>Cosine (float4): " . cos($float4) . "</p>";
        echo "<p>Sine (float3): " . sin($float3) . "</p>";
        echo "<p>Exponential (float5): " . exp($float5) . "</p>";
        echo "<p>Logarithm (float1): " . log($float1) . "</p>";
        echo "<p>Random: " . rand(1, 100) . "</p>";
        echo "<p>Modulo (int2, int3): " . ($int2 % $int3) . "</p>";
        echo "<p>Radians to Degrees (float4): " . rad2deg($float4) . "</p>";
        echo "<p>Factorial of (int3): " . factorial($int3) . "</p>"; // Custom factorial function
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
