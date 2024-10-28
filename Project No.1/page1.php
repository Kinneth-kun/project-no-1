<!DOCTYPE html>
<html>
<head>
    <title>Page 1: Curriculum Vitae</title>
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
            width: 700px;
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
            margin-bottom: 5px;
            color: #333;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 10px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            color: #333;
        }
        p, ul {
            margin: 0;
            padding: 0;
        }
        .section {
            margin-bottom: 20px;
        }
        .section ul {
            list-style-type: none;
        }
        .section ul li {
            margin-bottom: 10px;
        }
        .personal-info ul {
            display: table;
            width: 100%;
        }
        .personal-info ul li {
            display: table-row;
        }
        .personal-info ul li strong {
            display: table-cell;
            padding-right: 10px;
            white-space: nowrap;
        }
        .personal-info ul li span {
            display: table-cell;
            text-align: left;
        }
        .skills ul, .education ul {
            padding-left: 20px;
        }
        .skills ul li, .education ul li {
            margin-bottom: 5px;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .creator-info {
            margin-top: 30px;
            text-align: right;
            font-size: 14px;
            color: #666;
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
        <h1>Kinneth A. Daluag</h1>
        <div class="contact-info">
            <p>Phone: 09942707522</p>
            <p>Email: kinnethdaluag@gmail.com</p>
            <p>Address: Zone Lato, Kalawisan Lapu-Lapu City</p>
        </div>

        <div class="section">
            <h2>OBJECTIVE</h2>
            <p>I possess a combination of creativity, accountability, and communication skills, along with extensive knowledge and exceptional skills to effectively handle various situations and tasks. I am fully confident that I can make valuable contributions and facilitate the growth of the company.</p>
        </div>

        <div class="section personal-info">
            <h2>PERSONAL INFORMATION</h2>
            <ul>
                <li><strong>Birthday:</strong> <span>June 16, 2004</span></li>
                <li><strong>Age:</strong> <span>20 years old</span></li>
                <li><strong>Sex:</strong> <span>Male</span></li>
                <li><strong>Marital Status:</strong> <span>Single</span></li>
            </ul>
        </div>

        <div class="section skills">
            <h2>SKILLS & QUALIFICATIONS</h2>
            <ul>
                <li>Good Personality</li>
                <li>Strong Communication Skills</li>
                <li>Can work with less supervision</li>
                <li>Can work under pressure</li>
                <li>Willing and Determined</li>
                <li>Quick to learn and adapt</li>
                <li>Patience</li>
                <li>Time Management</li>
            </ul>
        </div>

        <div class="section education">
            <h2>EDUCATION</h2>
            <ul>
                <li><strong>Cebu Technological University – Main Campus</strong> <br>(2022 - 2024, Present) <br>Bachelor of Science in Information System (BSIS)</li>
                <li><strong>Babag National High School – Babag 1, Lapu-Lapu City</strong> <br>(2020 - 2022) <br>Specialization in Visual Graphic Design (VGD)</li>
                <li><strong>Babag National High School – Babag 1, Lapu-Lapu City</strong> <br>(2016 - 2020) <br>(Academic Awardee)</li>
                <li><strong>Tiangue Elementary School – Babag 1, Lapu-Lapu City</strong> <br>(2010 - 2016)</li>
            </ul>
        </div>

        <div class="back-link">
            <a href="index.php">Back to Main Page</a>
        </div>

        <div class="footer">
            <p>Created by: Kinneth A. Daluag | Date Created: October 24, 2024</p>
        </div>
    </div>

</body>
</html>
