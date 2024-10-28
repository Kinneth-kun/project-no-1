<!DOCTYPE html>
<html>
<head>
    <title>Page 8: User-defined Functions</title>
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
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
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
        <h1>User-defined Functions</h1>
        <?php
        // Function to calculate area of a circle
        function areaOfCircle($radius) {
            return pi() * pow($radius, 2);
        }

        // Function to calculate the circumference of a circle
        function circumference($radius) {
            return 2 * pi() * $radius;
        }

        // Function to find maximum in an array
        function findMax($array) {
            return max($array);
        }

        // Function to find minimum in an array
        function findMin($array) {
            return min($array);
        }

        // Function to reverse a string
        function reverseString($str) {
            return strrev($str);
        }

        // Function to calculate sum of an array
        function sumArray($array) {
            return array_sum($array);
        }

        // Function to find the average of an array
        function averageArray($array) {
            return array_sum($array) / count($array);
        }

        // Function to check if a number is prime
        function isPrime($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        // Function to capitalize each word in a string
        function capitalizeWords($str) {
            return ucwords($str);
        }

        // Function to convert Celsius to Fahrenheit
        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }

        // Display the output
        echo "<p>Area of Circle (r = 5): " . areaOfCircle(5) . "</p>";
        echo "<p>Circumference of Circle (r = 5): " . circumference(5) . "</p>";
        echo "<p>Max in Array [3, 7, 2, 9]: " . findMax([3, 7, 2, 9]) . "</p>";
        echo "<p>Min in Array [3, 7, 2, 9]: " . findMin([3, 7, 2, 9]) . "</p>";
        echo "<p>Reversed String ('hello'): " . reverseString('hello') . "</p>";
        echo "<p>Sum of Array [1, 2, 3, 4]: " . sumArray([1, 2, 3, 4]) . "</p>";
        echo "<p>Average of Array [1, 2, 3, 4]: " . averageArray([1, 2, 3, 4]) . "</p>";
        echo "<p>Is 7 Prime? " . (isPrime(7) ? "Yes" : "No") . "</p>";
        echo "<p>Capitalized Words ('hello world'): " . capitalizeWords('hello world') . "</p>";
        echo "<p>25 Celsius to Fahrenheit: " . celsiusToFahrenheit(25) . "°F</p>";
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
