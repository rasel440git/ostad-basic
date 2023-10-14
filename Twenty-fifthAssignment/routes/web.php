<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
You are required to develop a fully functional payroll management software using the 
Laravel framework. The application should have the following features: 


User Authentication:

Simple Employee Leave Application Management System
User Type 

Employees: Can request leaves.

Managers: Approve or reject leave requests.
User Type 
Define leave categories like vacation, sick leave, etc

Leave Requests:
Employees request time off with dates and reason.
Managers get notified of new requests.

Approval Process:
Managers approve or reject requests.
Notifications Email sent to employees.

Leave Balances:
System tracks available leave days.

Basic Reporting:
Simple reports on leave history.

Submission Instruction :
Please submit your github repository link.

|
*/

Route::get('/', function () {
    return view('welcome');
});
