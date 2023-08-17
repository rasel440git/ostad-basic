<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Project Description:


You are tasked with creating an event management web application using the Laravel framework. 
Users should be able to create, view, edit, and delete events. 
The application should have authentication in place to ensure that only logged-in users can 
perform these actions. Events should have a title, description, date, time, and location.


Requirements:
Setup and Authentication:
Set up a new Laravel project.
Implement user authentication.

Create routes for user registration, login, and logout.

Database:
Set up a database with tables for users and events.
Define the necessary columns for the events table (e.g., title, description, date, time, location).
Create relationships between users and events (one-to-many).

Event CRUD:
Create a dashboard page for logged-in users.
Implement a page to list all events with basic details.
Implement a page to view the details of a specific event.
Create a page to add a new event.
Implement editing and updating of existing events.
Add a feature to delete events.

Validation and Error Handling:
Implement server-side validation for event creation and editing.
Display appropriate error messages to users in case of validation failures.

Authentication Middleware:
Use middleware to protect routes that require authentication.
Allow only authenticated users to create, edit, and delete events.

Frontend:
Design and implement responsive frontend views using Blade templates and CSS.
Display events in an organized and user-friendly format.
Enhance user experience with proper form layouts and interactions.
Allow users to RSVP for events.
Implement event categories and filtering.
Add pagination to the events listing page.
Implement a search functionality for events.

*/

Route::get('/', function () {
    return view('welcome');
});
