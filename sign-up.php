<?php

include 'config.php';

if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contno=$_POST['contactno'];
    $password=md5($_POST['password']);
    $role=$_POST['role'];

    $ret=mysqli_query($conn, "select email from users where email='$email' || mobile_no='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
    echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
     // Prepare the query
    $query1 = "INSERT INTO users (name,email,mobile_no,password,role) VALUES ('$name','$email','$contno','$password','$role')";
    // Execute the query
    $query = mysqli_query($conn, $query1);
    
    if ($query) {
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href ='sign-in.php'</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
       echo "<script>window.location.href ='home.php'</script>";
    }
}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIITvote.lk - Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        /* Left side: Image */
        .image-side {
            flex: 1;
            background-image: url('img/12 (9).jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .image-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        /* Right side: Form */
        .form-side {
            flex: 1;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .signup-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .signup-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .signup-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .signup-form .role-group {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .signup-form label {
            display: block;
            text-align: left;
            color: #333;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .signup-form .submit-btn {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-form .submit-btn:hover {
            background-color: #45a049;
        }
        .role-contain{
            display: flex;
            gap: 15px;
        }

        .toggle-password {
            cursor: pointer;
            font-size: 16px;
            color: #888;
            margin-left: 5px;
            margin-top: 20px;
            
            
        }

        .password-container{
            display: flex;
        }
        .role-name{
            margin-top: 5px;
        }

        .signin-link {
            text-align: center;
            margin-top: 1rem;
        }

        .signin-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signin-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image-side, .form-side {
                flex: none;
                width: 100%;
                height: 50%;
            }
        }

    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <!-- Image Side -->
        <div class="image-side"></div>

        <!-- Form Side -->
        <div class="form-side">
            <form name="signupForm" action="sign-up.php" method="POST" class="signup-form">
                <h2>Create Your Account</h2>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="contactno">Mobile No</label>
                <input type="number" id="contactno" name="contactno"  required><br/>

                <label for="password">Password:</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" required>
                    <span class="toggle-password" onclick="togglePassword()">👁️</span>
                </div>

                <label for="re_password">Confirm Password:</label>
                <div class="password-container">
                    <input type="password" id="re_password" name="re_password" required>
                    <span class="toggle-password" onclick="toggleRePassword()">👁️</span>
                </div>

                <div class="role-group">
                    <label>Role:</label>
                    <div class="role-contain">
                        <input type="radio" value="voter" name="role" required> <span class="role-name">Voter </span>
                        <input type="radio" value="nominee" name="role" required><span class="role-name"> Nominee </span>
                    </div>
                </div>

                <button type="submit" name="submit" class="submit-btn">Sign Up</button>
                <p class="signin-link"> Already have an account? <a href="sign-in.php">Sign In</a></p>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }

        function toggleRePassword() {
            const rePasswordInput = document.getElementById('re_password');
            rePasswordInput.type = rePasswordInput.type === 'password' ? 'text' : 'password';
        }

        function validateForm() {
            var password = document.forms["signupForm"]["password"].value;
            var re_password = document.forms["signupForm"]["re_password"].value;
            if (password !== re_password) {
                alert("Passwords do not match. Please try again.");
                return false;
            }
            return true;
        }
    </script>
     <?php include 'footer.php'; ?>
</body>
</html>
