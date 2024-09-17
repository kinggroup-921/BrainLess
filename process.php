<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);

    // Prepare the data to store
    $data = "Name: $name, Phone Number: $number\n";

    // File to store the data
    $file = 'data.txt';

    // Open the file and write the data
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect back to form.html or show a success message
    echo "Thank you for submitting your details!";
} else {
    echo "Form not submitted correctly.";
}
?>