<!DOCTYPE html>
<html>
<head>
    <title>Page 7: Loop Statements</title>
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
        <h1>Loop Statements</h1>
        <?php
        $n = 5;
        $m = 4;

        // Multiplication table using for loop
        echo "<h2>Multiplication Table (n x m):</h2>";
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $m; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }
        }

        // Fibonacci series using while loop
        echo "<h2>Fibonacci Series (n = $n):</h2>";
        $a = 0;
        $b = 1;
        $i = 0;
        while ($i < $n) {
            echo "$a ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $i++;
        }

        echo "<h2>Fibonacci Series (m = $m):</h2>";
        $a = 0;
        $b = 1;
        $i = 0;
        while ($i < $m) {
            echo "$a ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $i++;
        }

        // Factorial of n using do while loop
        echo "<h2>Factorial of n = $n:</h2>";
        $factorial = 1;
        $i = $n;
        do {
            $factorial *= $i;
            $i--;
        } while ($i > 0);
        echo "Factorial of $n = $factorial<br>";

        // Summation of m using do while loop
        echo "<h2>Summation of m = $m:</h2>";
        $sum = 0;
        $i = 1;
        do {
            $sum += $i;
            $i++;
        } while ($i <= $m);
        echo "Summation of $m = $sum<br>";
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
