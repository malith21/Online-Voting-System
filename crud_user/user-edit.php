<?php
include '../config.php';

if (isset($_GET['id'])) {
    $uid = $_GET['id'];

    
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$uid'");
    $row = mysqli_fetch_array($query);

    if (isset($_POST['update'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);

        // Update the user's details
        $update_query = mysqli_query($conn, "UPDATE users SET name='$name', email='$email', mobile_no='$mobile_no' WHERE id='$uid'");

        if ($update_query) {
            echo "<script>alert('User updated successfully!');</script>";
            echo "<script type='text/javascript'> document.location ='user-manage.php'; </script>";
        } else {
            echo "<script>alert('Error updating user. Please try again.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            color: #fff;
        }

        .update-btn {
            background-color: #28a745;
        }

        .cancel-btn {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
        }

        
        .update-btn:hover {
            background-color: #218838;
        }

        .cancel-btn:hover {
            background-color: #c82333;
        }

    </style>
    <body style="background-image: url('img/12 (4).jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
</head>
<body>
    <div class="container">
        <h2>Update User Details</h2>
        
        <form class="update-form" method="POST">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Enter user name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" placeholder="Enter user email" required>
            </div>

            <div class="form-group">
                <label for="mobile_no">Phone:</label>
                <input type="text" id="mobile_no" name="mobile_no" value="<?php echo htmlspecialchars($row['mobile_no']); ?>" placeholder="Enter phone number" required>
            </div>

            <div class="form-buttons">
                <button type="submit" name="update" class="btn update-btn">Update</button>
                <button type="button" class="btn cancel-btn" onclick="window.location.href='user-manage.php'">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php } ?>
