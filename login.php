<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div id="sign" class="lbox">
                <div id="log">
                    <h1>Welcome Back!</h1>
                    <h4>Don't have an account yet?</h4>
                    <h4>Make sure to sign up</h4>
                    <a href="#"><button onclick="sign()">SIGN UP</button></a>
                </div>
                <div id="reg">
                    <h1>Hello there!</h1>
                    <h4>Already have an account?</h4>
                    <h4>Make sure to sign in</h4>
                    <a href="#"><button onclick="sign()">SIGN IN</button></a>
                </div>
            </div>
            <div id="scont" class="rbox">
                <div id="loginp">
                    <form action="login.inc.php" method="POST">
                        <i class="bi bi-person"></i>
                        <input class="sinp" type="text" placeholder="Username">
                        <br>
                        <i class="bi bi-file-lock"></i>
                        <input class="sinp" type="password" placeholder="Password">
                        <br>
                        <input name="signin" class="sb" type="submit" value="SIGN IN">
                    </form>
                </div>
                <div id="reginp">
                    <form action="register.inc.php" method="POST">
                        <i class="bi bi-person"></i>
                        <input class="sinp" type="text" placeholder="Username" name="user">
                        <br>
                        <i class="bi bi-envelope"></i>
                        <input class="sinp" type="text" placeholder="Email" name="email">
                        <br>
                        <i class="bi bi-file-lock"></i>
                        <input class="sinp" type="password" placeholder="Password" name="pword">
                        <br>
                        <i class="bi bi-file-lock"></i>
                        <input class="sinp" type="password" placeholder="Repeat Password" name="pwordagain">
                        <br>
                        <input name="regin" class="sb" type="submit" value="SIGN UP">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>