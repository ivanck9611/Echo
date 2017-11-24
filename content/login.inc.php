<link rel="stylesheet" type="text/css" href="Styles/login.css">
<div class="title">
    <p>Login Page</p>
</div>

<div class="loginform">
    <form action="loginpage.php" method="POST">
        <! -- display validation errors here -->      
        <?php include('Database/errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
       </div>
        <div class="input-group">           
            <button type="submit" name="login" class="btn1">Login</button>
        </div>
        <p>
            Not yet a member ? <a href='register.php'>Sign Up Now</a>
        </p>
            
            
    </form>
</div>

     
   
