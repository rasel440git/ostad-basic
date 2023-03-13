<?php
/****
Create an HTML form with the following fields:

Name (text input)

Email (text input)

Password (password input)

Profile Picture (file input)

Submit Button



Write a PHP script that:

Validates the form inputs (ensure that all fields are filled out and the email is in a valid format).

Saves the profile picture to the server in a directory named "uploads" with a unique filename.

Adds the current date and time to the filename of the profile picture before saving it to the server.

Saves the user's name, email, and profile picture filename to a CSV file named "users.csv".

Starts a new session and sets a cookie with the user's name.

Create a new HTML page that displays the contents of the "users.csv" file in a table.
***/
?>

<!DOCTYPE html>
<html>
  <head>
    <title>File Upload Form</title>
  </head>
  <body>
    <h1>File Upload Form</h1>
    <form action="submit.php" method="post" enctype="multipart/form-data">
      
      <label for="username">Your Name:</label>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Your Password:</label>
      <input type="password" id="password" name="password">
      <br>
      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email">
      <br>
      <label for="file">Choose a file for Profile Picture:</label>
      <input type="file" id="file" name="file">
      <br>
      <label for="submit">Check your information and:</label>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
