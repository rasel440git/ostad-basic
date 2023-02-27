

<?php
class Person {
    public $name;
    public $email;
  
    // public function __construct($name, $email) {
    //   $this->name = $name;
    //   $this->email = $email;
    // }

    public function setName($name){
        $this->name=$name;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
  }


if($_SERVER['REQUEST_METHOD']== 'POST'){
     $name= $_POST['name'];
     $email= $_POST['email'];

    $PersonData = new Person();
    $PersonData->setName($name);
    $PersonData->setEmail($email);

    echo "Your Submited Name is:  ".$PersonData->getName()." and Your Email Address is :  ".$PersonData->getEmail()." Thank You";
}
else{
    echo "Submit your form properly or sumthing wrong!!";
}




  