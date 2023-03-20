<?php

session_name('Rasel');
session_start();
//echo $_SESSION['name'];

$_SESSION['counter']= $_SESSION['counter']??0;
$_SESSION['counter']++;
echo $_SESSION['counter'];