<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Task 1:
Create a new migration file to add a new table named "categories" to the database. 
The table should have the following columns:
id (primary key, auto-increment)
name (string)
created_at (timestamp)
updated_at (timestamp)

Task 2:
Create a new model named "Category" associated with the "categories" table. 
Define the necessary properties and relationships.

Task 3:
Write a migration file to add a foreign key constraint to the "posts" table. 
The foreign key should reference the "categories" table on the "category_id" column.

Task 4:
Create a relationship between the "Post" and "Category" models. 
A post belongs to a category, and a category can have multiple posts.
 
Task 5:
Write a query using Eloquent ORM to retrieve all posts along with their associated 
categories. Make sure to eager load the categories to optimize the query.

Task 6:
Implement a method in the "Post" model to get the total number of posts belonging to a 
specific category. The method should accept the category ID as a parameter and return the 
count.

Task 7:
Create a new route in the web.php file to handle the following URL 
pattern: "/posts/{id}/delete". Implement the corresponding controller 
method to delete a post by its ID. Soft delete should be used.

Task 8:
Implement a method in the "Post" model to get all posts that have been soft deleted. 
The method should return a collection of soft deleted posts.

Task 9:
Write a Blade template to display all posts and their associated categories. 
Use a loop to iterate over the posts and display their details.

Task 10:
Create a new route in the web.php file to handle the following URL 
pattern: "/categories/{id}/posts". Implement the corresponding controller method to 
retrieve all posts belonging to a specific category. The category ID should be passed 
as a parameter to the method.

Task 11:
Implement a method in the "Category" model to get the latest post associated with the 
category. The method should return the post object.
 
Task 12:
Write a Blade template to display the latest post for each category. Use a loop to 
iterate over the categories and display the post details.
|
*/

Route::get('/', function () {
    return view('welcome');
});
