<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>


    <div class="login">
        <h2>Sign In to Your World</h2>
        <div class="forms">
            <form action="" method="post">
                <div class="wrapper">
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Enter your username..." id="">
                </div>
                <div class="wrapper">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter your password" id="">
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember" id="">
                    <span>Remember me</span>
                </div>
                <button>Login</button>

                <span>Don't have an account? 
                    <a href="signup.html">Signup</a>
                </span>
                
            </form>
        </div>
    </div>
    
</body>
</html>