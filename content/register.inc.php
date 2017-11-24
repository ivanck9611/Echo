<link rel="stylesheet" type="text/css" href="Styles/login.css">

<div class="title">
    <p>Register Page</p>
</div>

<div class="loginform">
    <form action="register.php" method="POST">
        <! -- display validation errors here -->      
        <?php include('Database/errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
       </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
       </div>
        <div class="input-group">           
            <button type="submit" name="reg" class="btn1">Register</button>
        </div>
        <p>
            Already a member? <a href="loginpage.php">Sign In</a>
        </p>
            
            
    </form>
</div>

     