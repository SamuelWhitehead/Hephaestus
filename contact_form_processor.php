<?php

if(!isset($_POST['submit']))
{
    echo "Error; you need to submit the form!"
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$visitor_email = $_POST['email'];
$message = $_POST['subject'];

//Validate
if(empty($fname) || empty($lname) || empty($visitor_email))
{
    echo "You need a name and email!";
    exit;
}

$email_from = 'samwhitehead26@gmail.com';
$