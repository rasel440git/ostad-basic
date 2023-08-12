<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Assignment:  Creating an Income Expense Tracker


You are tasked with developing an Income Expense Tracker web application using Laravel 
to help users manage their finances effectively. The application will allow users to track 
their income and expenses, view financial summaries, and perform basic financial 
calculations. The assignment involves implementing various Laravel concepts, including 
database migrations, Eloquent ORM, form validation, and data manipulation.


Requirements:
Database Setup:
Create a new database and configure the database connection in the .env file.

Design and implement the necessary database tables for the application. You need at least 
two tables, one for income records and one for expense records. Include relevant fields 
such as amount, description, date, and category. 


Models and Relationships:
Create two models: Income and Expense, representing the income and expense records, 
respectively.


Define the relationships between the Income and Expense models and the user model. 
Each income and expense record should belong to a specific user. 


User Authentication:

Implement user registration and login functionalities using Laravel's built-in 
authentication system.

Restrict access to the income and expense tracking features to authenticated users only. 


Income and Expense Creation:
Provide a form for users to add new income and expense records.
Implement server-side validation to ensure the amount, description, and date fields are 
required and correctly formatted.

 Displaying Records:

Create separate views to display the list of income and expense records for the logged-in 
user.

Implement pagination to display a limited number of records per page. 


Financial Calculations:
Calculate and display the total income and total expenses for the user.
Calculate and display the net income (income - expenses) for the user.

Filtering and Sorting:
Allow users to filter income and expense records based on categories or date ranges.
Provide options for sorting records by date or amount in ascending or descending order.

Data Manipulation:
Implement the ability to edit and delete income and expense records.

Styling and User Experience:
Apply CSS styling to ensure a user-friendly and visually appealing interface.
Make the application responsive to different screen sizes.
|
*/

Route::get('/', function () {
    return view('welcome');
});

