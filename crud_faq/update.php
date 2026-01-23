<?php
require '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $question = $_POST["question"];

    // Validate that none of the fields are empty
    if (empty($id) || empty($name) || empty($email) || empty($question)) {
        echo "All fields are required.";
    } else {
        // Check the column names to ensure they exist in your database
        $sql = "UPDATE question SET name='$name', email='$email', question='$question' WHERE id='$id'";

        // Execute the query
        if ($con->query($sql) === TRUE) {
            echo "Updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE.lk - Update Response</title>
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        header {
            background-color: #003366;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo img {
            height: 40px;
        }

        header nav ul {
            display: flex;
            list-style: none;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        header .header-btn .log-out {
            background-color: #00509e;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Main form container */
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 20px;
        }

        .container-responsedetails {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .container-responsedetails h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: vertical;
        }

        /* Buttons */
        .save, .cancel {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .save button,
        .cancel button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .save button:hover,
        .cancel button:hover {
            background-color: #218838;
        }

        .cancel button {
            background-color: #ff4b5c;
        }

        .cancel button:hover {
            background-color: #e63946;
        }

        /* Footer */
        footer {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 24px;
        }

        footer .footer-nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 10px 0;
        }

        footer .footer-nav ul li {
            margin: 0 10px;
        }

        footer .footer-bottom a {
            color: white;
            text-decoration: none;
        }

        footer .bottom p {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!-- Header section starts -->
<header>
    <a href="#" class="logo"><img src="images/logo.png" alt="Logo"></a>
    <nav>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#vote">Vote</a></li>
            <li><a href="#aboutus">Nominee</a></li>
            <li><a href="#news">Result</a></li>
           
        </ul>
    </nav>
    <div class="header-btn">
        <a href="Login.html" class="log-out">Log out</a>
        <i class='bx bxs-user'></i>
    </div>
</header>
<!-- Header section ends -->

<!-- Body section starts -->
<div class="main">
    <form method="post">
        <div class="container-responsedetails">
            <h1>Update User Response</h1>

            <div class="form-group">
                
            <label for="id">ID:</label>
            <input type="text" id="id"  name="id" required>
            
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="question">Question:</label>
                <textarea id="question" name="question" rows="4" required></textarea>
            </div>

            <div class="save">
                <button type="submit">Save Changes</button>
            </div>
            <div class="cancel">
                <a href="list.html"><button type="button">Cancel</button></a>
            </div>
        </div>
    </form>
</div>
<!-- Body section ends -->

<hr>

<!-- Footer section starts -->
<footer>
    <div class="footer-container">
        <div class="social-icons">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>
    <div class="footer-nav">
        <ul>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#company">Company</a></li>
            <li><a href="#contactus">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-bottom">
       
        
    </div>
    <div class="bottom">
       
    </div>
</footer>



<script src="main.js"></script>

</body>
</html>
