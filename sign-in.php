<?php
session_start();
error_reporting(0);

include 'config.php';

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($conn,"select id from users where  (email='$emailcon' || mobile_no='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['uid']=$ret['id'];
     echo "<script type='text/javascript'> document.location ='home.php'; </script>";
    }
    else{
    echo "<script>alert('Invalid Details');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Login Page</title>
    <style>
                    * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Arial', sans-serif;
            }

            body, html {
                height: 100%;
            }

            .container {
                display: flex;
                height: 100vh;
            }

            .image-section {
                flex: 1;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .image-section img {
                max-width: 100%;
                height: 100vh;
                object-fit: cover;
            }

            .login-section {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f4f4f4;
                padding: 2rem;
            }

            form {
                width: 100%;
                max-width: 400px;
                background-color: white;
                padding: 2rem;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
                margin-bottom: 1.5rem;
                font-size: 2rem;
            }

            .input-group {
                margin-bottom: 1rem;
                display: flex;
                flex-direction: column;
            }

            .input-group input {
                padding: 10px;
                font-size: 1rem;
                border-radius: 8px;
                border: 1px solid #ccc;
                transition: border-color 0.3s;
            }

            .input-group input:focus {
                border-color: #007bff;
            }

            .submit-btn {
                width: 100%;
                padding: 10px;
                background-color: #007bff;
                border: none;
                color: white;
                font-size: 1rem;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .submit-btn:hover {
                background-color: #0056b3;
            }

            .signup-link {
                text-align: center;
                margin-top: 1rem;
            }

            .signup-link a {
                color: #007bff;
                text-decoration: none;
            }

            .signup-link a:hover {
                text-decoration: underline;
            }
            .admin-btn {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                border: none;
                color: white;
                font-size: 1rem;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s;
                margin-top: 10px;
            }

            .admin-btn:hover {
             background-color: #388E3C;
            }

    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <!-- Left-side image section -->
        <div class="image-section">
            <img src="img/11 (1).jpg" alt="Login Image">
        </div>

        <!-- Right-side login form -->
        <div class="login-section">
            <form id="loginForm" action="sign-in.php" method="POST">
                <h2>Welcome vote.lk</h2>
                <div class="input-group">
                    <input type="text" id="emailcont" placeholder="Registered Email or Mobile No" required name="emailcont">
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password" name="password" required>
                </div>
                <div class="input-group">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" name="login" class="submit-btn">Login</button>
                <p class="signup-link">Don't have an account? <a href="sign-up.php">Sign Up</a></p>

                <!-- Admin Login Button -->
                <button type="button" class="admin-btn" onclick="window.location.href='admin_log_form.html';">Login as Admin</button>
            </form>
        </div>
    </div>
   
     <?php include 'footer.php'; ?>
</body>
</html>
