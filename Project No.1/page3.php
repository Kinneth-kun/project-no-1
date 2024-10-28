<!DOCTYPE html>
<html>
<head>
    <title>Page 3: Manipulating Numbers</title>
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculate Student Grades</h1>
        <?php
        // Data for quizzes, projects, and exams
        $quiz_scores = [85, 90, 78, 92, 88];
        $project_scores = [90, 85];
        $midterm_exam = 87;

        // Calculate averages
        $avg_quizzes = array_sum($quiz_scores) / count($quiz_scores);
        $avg_projects = array_sum($project_scores) / count($project_scores);

        // Midterm grade calculation
        $midterm_grade = $avg_quizzes * 0.30 + $avg_projects * 0.20 + $midterm_exam * 0.50;

        // Tentative final grade
        $tentative_final = 89; // Example value
        $final_final_grade = ($midterm_grade + $tentative_final) / 2;

        echo "<p>Midterm Grade: $midterm_grade</p>";
        echo "<p>Tentative Final Grade: $tentative_final</p>";
        echo "<p>Final Grade: $final_final_grade</p>";
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
