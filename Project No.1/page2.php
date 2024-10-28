<!DOCTYPE html>
<html>
<head>
    <title>Page 2: Use of Variables</title>
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
        h2 {
            font-size: 20px;
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
        <h1>Variable Declaration</h1>
        <?php
        // Whole numbers
        $num1 = 10; $num2 = 25; $num3 = 30; $num4 = 45; $num5 = 50;

        // Floating point numbers
        $float1 = 10.5; $float2 = 20.9; $float3 = 30.1; $float4 = 40.2; $float5 = 50.6;

        // Strings
        $str1 = "Item A"; $str2 = "Item B"; $str3 = "Item C"; $str4 = "Item D"; $str5 = "Item E";

        // Characters
        $char1 = 'A'; $char2 = 'B'; $char3 = 'C'; $char4 = 'D'; $char5 = 'E';

        echo "<h2>Whole Numbers:</h2>";
        echo "$num1, $num2, $num3, $num4, $num5<br>";

        echo "<h2>Floating Numbers:</h2>";
        echo "$float1, $float2, $float3, $float4, $float5<br>";

        echo "<h2>Strings:</h2>";
        echo "$str1, $str2, $str3, $str4, $str5<br>";

        echo "<h2>Characters:</h2>";
        echo "$char1, $char2, $char3, $char4, $char5<br>";
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
