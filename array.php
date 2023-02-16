<?php

$students= array('num1'=>'Ram','num2'=>'Sam','num3'=>'Jodu','Modhu','Kali');

//print_r($student);
foreach($students as $key => $student){
    //echo $key.$student. "\n";
}

$studentInfo= array(
    array('Name'=>'Abdul', 'Group'=>'Science', 'Roll'=>35),
    array('Name'=>'Kuddus', 'Group'=>'Arts', 'Roll'=>15),
    array('Name'=>'Jamal', 'Group'=>'Commers','Roll'=>25)
);
echo $studentInfo [2]['Name'];
//print_r($studentInfo);

foreach($studentInfo as $students){
   
    foreach($students as $key =>$student){
        //echo $key."=>".$student."\n";
        
    }
}
