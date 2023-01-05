
<link rel="stylesheet" href="../static/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container">
    <h1>Please Login</h1>
    
    <form action="../includes/login.inc.php" method="POST">
        <div class="form-control">
            <input type="text" name="uid" required>
            <label >Username</label>
        </div>
        <div class="form-control">
            <input type="password" name="pwd" required>
            <label >password</label><br>

            <button class="btn" name="submit">Login </button>         
            
            <p class="text">
                Don't have an account <a href="signup.php">Register</a>
            </p>
        </div>
    </form>
</div>
<script src="../static/script.js"></script>