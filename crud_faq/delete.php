<!DOCTYPE html>
<html>
    <head>
        <title>//</title>
        <style>
             
                body {
                    margin: 0;
                    padding: 0;
                    background-image: url("./images/hotel img.jpg");
                    background-size: cover;
                    background-position: center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    color: white;
                }

                .container {
                    background-color: rgba(0, 0, 0, 0.8);
                    width: 350px;
                    padding: 40px;
                    margin: 100px auto;
                    border-radius: 10px;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
                    text-align: center;
                }

                h1 {
                    margin-bottom: 30px;
                    font-size: 24px;
                    color: #f1c40f;
                }

                form {
                    display: flex;
                    flex-direction: column;
                }

                label {
                    margin-bottom: 10px;
                    font-size: 18px;
                    text-align: left;
                }

                input[type="id"], input[type="submit"] {
                    padding: 10px;
                    margin-bottom: 20px;
                    border-radius: 5px;
                    border: none;
                    font-size: 16px;
                    width: 100%;
                }

                input[type="id"] {
                    background-color: #fff;
                    color: #333;
                    border: 1px solid #ddd;
                }

                input[type="submit"] {
                    background-color: #e74c3c;
                    color: white;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                input[type="submit"]:hover {
                    background-color: #c0392b;
                }
            
            </style>
    </head>
    <body>
        <div>
                <form method="post" action="delete.php">
                    <label for="id">id</label>
                    <input type="id" id="id"  name="id">
                   <input type="submit" value="Delete">
            
                </form>
    </body>
</html>
<?php

require '../config.php';

$id = $_POST["id"];

$sql="DELETE FROM question WHERE id='$id'";

if($conn ->query($sql))
{
    echo "<script>alert('Deleted.');</script>";
}    
else{
    echo "<script>alert('Not Deleted.');</script>";
}



?>