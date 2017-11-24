<?php
    $username = "";
    $email ="";
    $errors = array();
    
    //connect to the database
    $db = mysql_connect('localhost', 'root', '', 'Echo');
    
    //if the register button is clicked
    if (isset($POST['register'])){
        $username = mysql_real_escape_string($POST['username']);
        $email = mysql_real_escape_string($POST['email']);
        $password_1 = mysql_real_escape_string($POST['password_1']);
        $password_2 = mysql_real_escape_string($POST['username']);
        
        //ensure that form fields are filled properly
        if (empty($getusername)){
            array_push($errors, "Username is required"); //add error to errors array
        }
        if (empty($getemail)){
            array_push($errors, "Username is required"); //add error to errors array
        }
        if (empty($password_1)){
            array_push($errors, "Username is required"); //add error to errors array
        }
        if ($password_1 != $password_2){
            array_push($errors, "Thw two passwords do not match"); //add error to errors array
        }
        // if there are no errors, save user to data base
        if (count($errors) == 0){
            $sql = "INSERT INTO users (username, email, password) "
                    . "VALUES ('$getusername', '$getemail', '$password')";
        }
        mysql_query($db, $sql);
    }
    
    ?>