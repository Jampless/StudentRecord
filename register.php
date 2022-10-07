

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name = " viewport " content = "width=device-width, initial-scale = 1.0">

    <link rel = " stylesheet " href="style1.css">

    <title> Login Form </title>
</head>
<body>
    <div class = "wrapper">
        <h2 class="title">Register</h2>
        <form action = "one.php" method="POST" class="form">

            <div class = "input-field">
                <label for="name" class="input-label"> Full Name </label>
                <input type="text" id="Name" name= "Name" class="input" placeholder="FullName" required>
            </div>

            <div class = "input-field">
                <label for="department" class="input-label"> Department</label>
                <input type="text" id="dep" name= "dep" class="input" placeholder="Department" required>    
            </div>

            <div class = "input-field">
                <label for="mail" class="input-label"> Email</label>
                <input type="text" id="mail" name= "mail" class="input" placeholder="Email"required>    
            </div>

            <div class = "input-field">
                <label for="password" class="input-label"> Password </label>
                <input type="password" id="Pass" name= "Pass" class="input" placeholder="Password"required>
            </div>
         
            <button id="submit" class="btn">Login</button>
            <p> Have already an account! <a href="index.php"> Login </a>.</p>

        </form>
    </div>
</body>
</html>
