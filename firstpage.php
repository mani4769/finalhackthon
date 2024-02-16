<?php include("navbar2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            height: 100%;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form {
            background-color: rgb(255, 255, 255);
            width: 28%;
            border-radius: 6px;
            margin-bottom: 25%;
            padding: 40px;
            box-shadow: 10px 10px 5px rgb(80, 11, 77);
            text-align: center; /* Center align content */
        }
        /* Add custom styles for the buttons */
        .btn {
            display: inline-block; /* Display buttons inline */
            margin: 10px; /* Add margin between buttons */
            padding: 10px 20px; /* Add padding to buttons */
            border-radius: 5px; /* Add border-radius to buttons */
            cursor: pointer;
        }
        #signup-btn {
            background-color: #005580;
            color: white;
            border: none;
        }
        #login-btn {
            background-color: #005580;
            color: white;
            border: none;
        }
        .btn:hover {
            opacity: 0.8; /* Reduce opacity on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <!-- Button to sign up -->
            <input type="submit" id="signup-btn" class="btn" value="Sign Up" onclick="redirectToSignupPage()"/>
            <!-- Button to login -->
            <input type="submit" id="login-btn" class="btn" value="Login" onclick="redirectToLoginPage()"/>
        </div>
    </div>

    <script>
        // JavaScript function to redirect to sign up page
        function redirectToSignupPage() {
            window.location.href = "signup.php"; // Replace "signup.php" with the desired sign up page
        }

        // JavaScript function to redirect to login page
        function redirectToLoginPage() {
            window.location.href = "login.php"; // Replace "login.php" with the desired login page
        }
    </script>
</body>
</html>
