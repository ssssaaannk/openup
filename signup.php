<?php
    include("classes/connect.php");
    include("classes/signup.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup();
        $result = $signup -> evaluate($_POST);

        if($result != ""){
            echo $result;
        }else{
            echo "no error";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to openup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
        }
        .header {
            background-color: #4267b2;
            padding: 10px;
            color: white;
            text-align: right;
        }
        .header a {
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 4px;
            background-color: #4CAF50;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 50px auto;
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .container input, .container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background-color: #4267b2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #365899;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="#">Log in</a>
    </div>
    <div class="container">
        <h2>Sign up to openup</h2>
        <form method="post" action ="signup.php">
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="retype_password" placeholder="Retype Password" required>
            <button type="submit">Sign up</button>
        </form>
    </div>
</body>
</html>
