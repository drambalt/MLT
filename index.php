<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register and login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form action="lib/register.php" method="post">
        <div class="input-ground">
            <i class="fas fa-user"></i>
            <input id="fName" name="fName" placeholder="First Name" required type="text">
            <label for="fname">First name</label>
        </div>
        <div class="input-ground">
            <i class="fas fa-user"></i>
            <input id="lName" name="lName" placeholder="Last Name" required type="text">
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input id="email_signup" name="email" placeholder="Email" required type="email">
            <label for="email_signup">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input id="password_signup" name = "password" placeholder="password" required type="password">
            <label for="password_signup">Password</label>
        </div>
        <input class="btn" name="signUp" type="submit" value="Sign Up">

    </form>
    <p class="or">
        ----------or----------
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>


<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form action="lib/signin.php" method="post">

        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input id="email_signin" name="email" placeholder="Email" required type="email">
            <label for="email_signin">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input id="password_signin" name="password" placeholder="password" required type="password">
            <label for="password_signin">Password</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a>
        </p>
        <button class="btn" name="signIn" type="submit">Sign In</button>

    </form>
    <p class="or">
        ----------or----------
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
    </div>

</div>
<script src="js/script.js"></script>
</body>
</html>