

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
     $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Validation checks
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "You must be fill all information..";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid email..";
    }
    else if($password != $confirm_password) {
        echo "Passwords didn't match.";
    }
    else {
        echo "Congratulation!!! Your regestation is successfully Done! Your Name is: " .$fname ." ". $lname;
    }
}