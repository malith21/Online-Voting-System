<?php
include '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM nominees WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $contact = $_POST['contact'];

    $sql = "UPDATE nominees SET name='$name', email='$email', category='$category', contact='$contact' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Edit Nominee</title>
</head>
<body>
    
    <h1>Edit Nominee</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Category: <input type="text" name="category" value="<?php echo $row['category']; ?>" required><br>
        Contact: <input type="text" name="contact" value="<?php echo $row['contact']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php"class="Back"><br>Back</br></a>
    <script src="script.js"></script> 


</body>
</html>
