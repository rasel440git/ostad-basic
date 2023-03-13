<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the file information
    //$fileName = $_FILES['file']['name'];
    $fileName = date('YmdHis') . '_' . $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    
    // Get the user's name and email
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    // Validate the user's name
    if (empty($username)) {
      echo 'Please enter your name.';
    }
    
    // Validate the user's email
    if (empty($email)) {
      echo 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'Please enter a valid email address.';
    }
    
    // Check if there was an error uploading the file
    if ($fileError !== UPLOAD_ERR_OK) {
      echo 'Sorry, there was an error uploading your file.';
    } else {
      // Upload the file to the server
      move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
      echo 'Your file has been uploaded successfully.';

      // Write the form data to a CSV file
      $data = array($username, $email, $fileName);
      $fp = fopen('data.csv', 'a');
      fputcsv($fp, $data);
      fclose($fp);
      
      echo 'Your data has been saved to the CSV file.';

    
    }

    
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CSV Data Form</title>
</head>
<body>
    <table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// read users data from CSV file
				$csvfile = fopen('data.csv', 'r');

				while (($data = fgetcsv($csvfile)) !== false) {
					echo '<tr>';
					echo '<td>' . $data[0] . '</td>';
					echo '<td>' . $data[1] . '</td>';
					echo '<td><img src="uploads/' . $data[2] . '"></td>';
					echo '</tr>';
				}

				fclose($file);
			?>
		</tbody>
	</table>
</body>
</html>
