<?php
    session_start();
    $username = "";
    $email ="";
    $errors = array();

    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'echo');

    //if the register button is clicked
    if (isset($_POST['reg'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
        //ensure that form fields are filled properly
        if (empty($username)){
            array_push($errors, "Username is required"); //add error to errors array
        }
        if (empty($email)){
            array_push($errors, "Email is required"); //add error to errors array
        }
        if (empty($password_1)){
            array_push($errors, "Password is required"); //add error to errors array
        }
        if ($password_1 != $password_2){
            array_push($errors, "Thw two passwords do not match"); //add error to errors array
        }
        // if there are no errors, save user to data base
        if (count($errors) == 0){
            $sql = "INSERT INTO users (username, email, password) "
                    . "VALUES ('$username', '$email', '$password_1')";
        
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }
    
?>