<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($name) && !empty($password)) {
            echo "<h1>Hello there, $name, here are your details:>> </h1>
<h2>Name:  $name </h2>
<h2>Password:  $password</h2>";
        } else {
            echo "<h2>Please fill in all the fields.</h2>";
        }
    } else {
        echo "<h3>Please fill in all the fields.</h3>";
    }
} else {
    echo "<h3>Invalid request method.</h3>";
}
