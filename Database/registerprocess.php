<?php
    $username = "";
    $email ="";
    $errors = array();
    
    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'echo');
    
    //if the register button is clicked
    if (isset($POST['register'])){
        $username = mysql_real_escape_string($POST['username']);
        $email = mysql_real_escape_string($POST['email']);
        $password_1 = mysql_real_escape_string($POST['password_1']);
        $password_2 = mysql_real_escape_string($POST['username']);
        
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
                    . "VALUES ('$getusername', '$getemail', '$password')";
        
            mysqli_query($db, $sql);
        }
    }
    
?>