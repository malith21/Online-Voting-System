<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO nominees (name, email, category, contact) VALUES ('$name', '$email', '$category', '$contact')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Add Nominee</title>
</head>

<body>

    <h1><br>Add New Nominee</br></h1>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Category: <input type="text" name="category" required><br>
        Contact: <input type="text" name="contact" required><br>
        <input type="submit" value="Add">
    </form>
    <a href="index.php" class="back"> Back</a>
    <script src="script.js"></script>



</body>
</html>
