<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Example of meta description">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <title>Title</title>
</head>
<body>

<header>
<nav>
    <a href="#">
<img src="image/loggo.jpg" alt="loggo">
    </a>
    <ul>
       <li><a href="index.php">Home</a> </li>
           <li><a href="#">Portfolio</a> </li>
               <li><a href="#">About Me</a> </li>
                   <li><a href="#">Contact</a> </li>
    </ul>
    <div>
        <form action="includes/login.inc.php" method="post">
        <input type="text" name="uname"placeholder="Enter username(email)">
            <input type="password" name="pswd"placeholder="Enter password">
            <button type="submit" name="Login-Submit">Login</button>
        </form>
        <a href="signup.php">signup</a>
        <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="Logout-Submit">Logout</button>

    </div>
</nav>

</header>
</body>
</html>