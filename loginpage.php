<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="logo">
    <img src="logo1.png" class="logo">
</div>

<div class="box">
    <div class="container">
        <form action="logindb.php" method="post">
            <h2>Login</h2>

            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="privateword">Private Word:</label>
            <input type="privateword" name="privateword" required>

            <button type="submit" class="button">Login
                <a href="dashboard.php" ></a></button> 
            <br>
            <a href="index.html" class="button">Cancel</a>
        </form>
    </div>
</div>

</body>
</html>