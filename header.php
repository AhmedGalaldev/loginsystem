<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <a href="">
                <img class="logo" src="image/logo.jpeg" alt="">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">About Me</a></li>
                <li><a href="">Contacts</a></li>
            </ul>
            <div class="navforms">
                <form class="login-form" action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username or Email" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    <button class="mybutton" type="submit" name="login-submit">Login</button>
                </form>
                <button class="mybutton" href="signup.php">Signup</button>
                <form class="logout-form" action="includes/logout.inc.php" method="post">
                    <button class="mybutton" type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>