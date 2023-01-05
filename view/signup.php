<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning login with OOP</title>
    <link rel="stylesheet" href="../static/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>    
    <div class="container">
        <h1>SIGN UP</h1>       
        <form action="../includes/signup.inc.php" method="POST">
            <div class="form-control">
                <input type="text" name="uid">
                <label >Username</label>
            </div>
            <div class="form-control">
                <input type="email" name="email">
                <label >Email</label>
            </div>
            <div class="form-control">
                <input type="password" name="pwd">
                <label >Password</label>
            </div>
            <div class="form-control">
                <input type="password" name="pwdrepeat">
                <label >Repeat Password</label>
            
            <button class="btn" name="submit">Signup </button>         
            
            <p class="text">
                Already have an account? <a href="login.php">Login</a>
            </p>
        </form>
    </div>
      
    </div>

    <script src="../static/script.js"></script>
</body>
</html>