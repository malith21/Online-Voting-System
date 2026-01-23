<?php
session_start();
error_reporting(0);
require 'config.php';

// Check if the user is logged in
$is_logged_in = isset($_SESSION['uid']) && !empty($_SESSION['uid']);
?>

<body>

<header>
<style>
  body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #F0F0F0; /* Light Gray */
        }

        /* Navigation Bar CSS */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #333333; /* Dark Gray */
            background-color: #003366; /* Navy Blue */
        }

        nav a {
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.15em;
            
            display: inline-block;
            padding: 15px 20px;
            position: relative;
        }
        nav a:after {    
            background: none repeat scroll 0 0 transparent;
            bottom: 0;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            position: absolute;
            background: #fff;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;
        }
        nav a:hover:after { 
            width: 100%; 
            left: 0; 
        }

        /* Auth Buttons in Nav Bar */
        .auth-buttons {
            display: flex;
        }

        .auth-buttons a {
            margin-left: 10px;
            padding: 5px 10px;
            border: 1px solid #19a9d4; /* Bright Blue */
            text-decoration: none;
            color: #ffffff; /* Bright Blue */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .auth-buttons a:hover {
            background-color: #1094ac; /* Bright Blue on hover */
            color: #ffffff; /* Navy Blue on hover */
        }

        .auth-buttons a.sign-up {
            background-color: #1094ac; /* Emerald Green */
            color: #FAFAFA; /* Off-white */
        }

        .auth-buttons a.sign-up:hover {
            background-color: #003366; /* Navy Blue on hover */
            color: #fdfdfd; /* Emerald Green on hover */
        }
</style>


<img alt="Logo" height="30" src='pics/ico.png' width="50"/>
   <nav>
    <a href="home.php">
     Home
    </a>
    <a href="vote.php">
     Vote
    </a>
    <a href="nominee2.php">
     Nominee
    </a>
    <a href="result.php">
     Results
    </a>
   </nav>

   <div class="auth-buttons">
        <?php if ($is_logged_in) { ?>
            <?php
                $uid=$_SESSION['uid'];
                $ret=mysqli_query($conn,"select name from users where ID='$uid'");
                $row=mysqli_fetch_array($ret);
                $name=$row['name'];

            ?>
            <!-- If the user is logged in, show the welcome message and logout button -->
            <span style="color: white; padding-right: 20px;">Hi! <?php echo $name;?></span>
            <a href="profile.php" class="btn btn-outline btn-default">Profile</a>
            <a href="logout.php" class="btn btn-outline btn-default">Logout</a>
            
        <?php } else { ?>

            <!-- If the user is not logged in, show login and signup buttons -->
            <a href="sign-in.php" class="btn">Sign In</a>
            <a href="sign-up.php" class="btn sign-up">Sign Up</a>
        <?php } ?>
    </div>
  </header>