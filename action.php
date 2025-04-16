<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email     = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phone     = $_POST['phone'];

    echo 'Email: ' . $email . ' | ' .
         'Firstname: ' . $firstname . ' | ' .
         'Lastname: ' . $lastname . ' | ' .
         'Phone: ' . $phone; 
}

exit;
