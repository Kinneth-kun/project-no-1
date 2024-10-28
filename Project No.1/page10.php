<!DOCTYPE html>
<html>
<head>
    <title>Page 10: Two-dimensional Array</title>
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
        <h1>Two-dimensional Array</h1>
        <?php
        $N = 3; // NxN array
        $array = [];
        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $N; $j++) {
                $array[$i][$j] = rand(1, 100); // Fill with random numbers
            }
        }

        echo "<h2>NxN Array:</h2>";
        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $N; $j++) {
                echo $array[$i][$j] . " ";
            }
            echo "<br>";
        }

        // Sum of rows and columns
        for ($i = 0; $i < $N; $i++) {
            $rowSum = array_sum($array[$i]);
            $colSum = array_sum(array_column($array, $i));
            echo "<h3>Sum of Row $i: $rowSum</h3>";
            echo "<h3>Sum of Column $i: $colSum</h3>";
        }

        // Sum and average of diagonals
        $mainDiagonal = $antiDiagonal = 0;
        for ($i = 0; $i < $N; $i++) {
            $mainDiagonal += $array[$i][$i];
            $antiDiagonal += $array[$i][$N - $i - 1];
        }
        echo "<h3>Sum of Main Diagonal: $mainDiagonal</h3>";
        echo "<h3>Sum of Anti Diagonal: $antiDiagonal</h3>";
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
