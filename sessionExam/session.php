<?php

session_name('Rasel');
session_start([
    'cookie_lifetime'=>10,
]);
 //$_SESSION['name'] = "Kamal";
//session_destroy();
echo $_SESSION['name'];