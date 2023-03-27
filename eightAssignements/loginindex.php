

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Validation checks
    if(empty($email) || empty($password) ) {
        echo "You must be fill all information..";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid email..";
    }
    else {
        echo "Congratulation!!! Login successfully Done! Your Mail is: " .$email;
    }
}