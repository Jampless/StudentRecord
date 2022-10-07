<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name = " viewport " content = "width=device-width, initial-scale = 1.0">

    <link rel = " stylesheet " href="style.css">

    <title> Login Form </title>
</head>
<body Style="background-color: black"; >

    <div class = "wrapper">
        <h2 class="title">LOGIN</h2>
        <form action = "Dashboard/index.php" method="POST" class="form">

            <div class = "input-field">
                <label for="email" class="input-label"> Email </label>
                <input type="email" id="email" class="input" placeholder="Enter your Email" required>
            </div>

            <div class = "input-field">
                <label for="password" class="input-label"> Password </label>
                <input type="password" id="email" class="input" placeholder="Enter your Password" required>
            </div>

            <button class="btn">Login</button>
            <p> Create Account! <a href="register.php"> Register </a>.</p>

        </form>
    </div>
</body>
</html>
