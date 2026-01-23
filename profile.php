<?php

session_start();
error_reporting(0);

include 'config.php';

if (strlen($_SESSION['uid'] == 0)) {
    header('location:logout.php');

} else {
    // Get the user's current details from the database
    $uid = $_SESSION['uid'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$uid'");
    $row1 = mysqli_fetch_array($query);
    
    // If the form is submitted
    if (isset($_POST['update'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contno = $_POST['contactno'];
        $password = $_POST['password'];
        
        
        if (!empty($password)) {
            $password=md5($_POST['password']); 
            $update_query = mysqli_query($conn, "UPDATE users SET name='$name', email='$email',mobile_no='$contno', password='$password' WHERE id='$uid'");
        } else {
            
            $update_query = mysqli_query($conn, "UPDATE users SET name='$name', email='$email',mobile_no='$contno' WHERE id='$uid'");
        }

        if ($update_query) {
            echo "<script>alert('Profile updated successfully!');</script>";
            echo "<script type='text/javascript'> document.location ='profile.php'; </script>";
        } else {
            echo "<script>alert('Error updating profile. Please try again.');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .submit-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <body style="background-image: url('img/12 (2).jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
</head>
<body>

<?php include 'header.php'; ?>

<div class="profile-container">

    <h2>Update Profile</h2>
   
    <form method="POST" action="">
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $row1['name']; ?>" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $row1['email']; ?>" required>
        </div>
        <div class="input-group">
            <label for="contactno">Mobile No</label>
            <input type="number" name="contactno" value="<?php echo $row1['mobile_no']; ?>" required>
        </div>
        <div class="input-group">
            <label for="role">Role</label>
            <input type="text" name="role" value="<?php echo $row1['role']; ?>" readonly>
        </div>

        <div class="input-group">
            <label for="password">New Password (leave blank if not changing)</label>
            <input type="password" name="password" placeholder="Enter new password">
        </div>

        <button type="submit" name="update" class="submit-btn">Update Profile</button>
    </form>
</div>

</body>
</html>

<?php } ?>
