<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    // Get the user's name and email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $details = $_POST['details'];
    
    // Validate the user's name
    if (empty($name)) {
      echo 'Please enter your name.';
    }
    
    // Validate the user's email
    if (empty($email)) {
      echo 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'Please enter a valid email address.';
    }
    
    echo "Your Data has been submited";
    
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Personal Blog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Add any CSS style sheets or JavaScript files here -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	
<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="index.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" >Home</a>
  
                <a href="blog.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Blog</a>
  
                <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Contact Us</a>
  
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="index.html" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Home</a>
  
          <a href="blog.html" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Blog</a>
  
          <a href="contact.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page"">Contact Us</a>
  
          
        </div>
        
      </div>
    </nav>
      
    <main>


      
<form action="#" method="post">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Your Name</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 
            focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              
              <input type="text" name="name" id="name" autocomplete="name" 
              class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 
              placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Name">
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Your Email Address</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 
            focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              
              <input id="email" name="email" type="email" autocomplete="email" 
              class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 
              placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Name">
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 
            focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              
              <input id="address" name="address" type="text" autocomplete="email" 
              class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 
              placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Name">
            </div>
          </div>
        </div>

        <div class="col-span-4">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Details</label>
          <div class="mt-2">
            <textarea id="about" name="details" rows="3" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write your require query and submit.</p>
        </div>

        <div class="col-span-4">
    
          <button type="submit" class="inline-block rounded-sm border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Submit</button>
        </div>    
 

        
      </div>
    </div>


  </div>

</form>

        
    </main>      


  

  <div class="w-100 h-10 flex bg-gray-100 justify-start items-center">
    <p>Copyright © 2023 My Personal Blog</p>
  </div>
</body>
</html>
