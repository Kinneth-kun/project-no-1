<!DOCTYPE html>
<html>
<head>
    <title>Page 6: Selection Statements</title>
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
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        h2, h3 {
            color: #555;
            margin-top: 20px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 15px;
            color: #555;
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
        <h1>Selection Statements</h1>
        <?php
        
        // Strings and integers
        $strings = ["Yellow", "Red", "Blue", "Green", "White"];
        $numbers = [12, 25, 45, 16, 20];

        // Sorting strings in ascending order
        sort($strings); // Ascending order
        echo "<h2>Strings in Ascending Order:</h2>";
        foreach($strings as $str) {
            echo $str . "<br>";
        }

        // Sorting strings in descending order
        rsort($strings); // Descending order
        echo "<h2>Strings in Descending Order:</h2>";
        foreach($strings as $str) {
            echo $str . "<br>";
        }

        // Checking if the first number is divisible by the fifth
        if ($numbers[0] % $numbers[4] === 0) {
            $sum = array_sum($numbers);
            $product = array_product($numbers);
            $average = $sum / count($numbers);
            echo "<h2>Sum: $sum</h2>";
            echo "<h2>Product: $product</h2>";
            echo "<h2>Average: $average</h2>";
        } else {
            sort($numbers); // Sort numbers in ascending order
            echo "<h2>Numbers in Ascending Order:</h2>";
            foreach($numbers as $num) {
                echo $num . "<br>";
            }
        }
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
