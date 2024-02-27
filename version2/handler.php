<?php
if (isset($_POST['submit'])) {  //Check if Post form has been submitted

    // Retrieve the input data into a variable
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        echo "All Fields must be filled please...";
    } else {
        $name = $_POST['name'];
        $password = $_POST['password'];
    }

    // We'll process the form data by just echoing the submitted data.
    echo "Hello there, " . $name . " here are your details: ";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Password: " . htmlspecialchars($password);
} else {
    echo "Error: Invalid request method.";
}
