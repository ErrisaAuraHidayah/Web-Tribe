<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="sign up.css">
</head>
<body>
    <div class="main">
        <h2>SIGN UP</h2>
        
        <div class="border"></div>
        <form action="proses-signup.php" method="post">
             <div>
                <input type="number" name="ID" required="" placeholder="ID">
            </div>
            <div>
                <input type="text" name="Name" required="" placeholder="Name">
            </div>
            <div>
                <input type="email" name="Email" required="" placeholder="Email">
            </div>
            <div>
                <input type="password" name="Password" required="" placeholder="Password">
            </div>
            <div>
                <input type="number" name="Phone" required="" placeholder="Phone">
            </div>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>