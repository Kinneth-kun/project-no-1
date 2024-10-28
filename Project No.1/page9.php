<!DOCTYPE html>
<html>
<head>
    <title>Page 9: Single-dimensional Array</title>
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
            width: 500px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        h2 {
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
        <h1>Single-dimensional Array</h1>
        <?php
        $people = [
            ["name" => "Kinneth Daluag", "age" => 20, "sex" => "Male", "nationality" => "Filipino"],
            ["name" => "Ashly Dayangco", "age" => 20, "sex" => "Female", "nationality" => "Filipino"],
            ["name" => "Christian Fajardo", "age" => 19, "sex" => "Male", "nationality" => "Filipino"],
            ["name" => "Andrea Pacaldo", "age" => 20, "sex" => "Female", "nationality" => "Filipino"],
            ["name" => "Jude Idulsa", "age" => 22, "sex" => "Male", "nationality" => "Filipino"],
            ["name" => "Marc Fajardo", "age" => 21, "sex" => "Male", "nationality" => "Filipino"],
            ["name" => "Jasmin Estenzo", "age" => 24, "sex" => "Female", "nationality" => "Filipino"],
            ["name" => "Andre Aledo", "age" => 21, "sex" => "Male", "nationality" => "Filipino"],
            ["name" => "Kemberly Amoin", "age" => 27, "sex" => "Female", "nationality" => "Filipino"],
            ["name" => "Gabriel Idulsa", "age" => 23, "sex" => "Male", "nationality" => "Filipino"],
        ];

        // Display unsorted array
        echo "<h2>Unsorted List:</h2>";
        foreach($people as $person) {
            echo "Name: " . $person['name'] . ", Age: " . $person['age'] . ", Sex: " . $person['sex'] . ", Nationality: " . $person['nationality'] . "<br>";
        }

        // Sort the array by name using a custom function
        usort($people, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        // Display sorted array
        echo "<h2>Sorted List by Name:</h2>";
        foreach($people as $person) {
            echo "Name: " . $person['name'] . ", Age: " . $person['age'] . ", Sex: " . $person['sex'] . ", Nationality: " . $person['nationality'] . "<br>";
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
