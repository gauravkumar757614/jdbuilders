<?php
include 'config.php';
session_start();
$message = '';

if (isset($_POST['submit'])) {
    $name       =       mysqli_real_escape_string($connection, $_POST['name']);
    $email      =       mysqli_real_escape_string($connection, $_POST['email']);
    $phone      =       mysqli_real_escape_string($connection, $_POST['phone']);
    $plan       =       mysqli_real_escape_string($connection, $_POST['plan']);

    if ($name == '') {
        $name_error = 'Name field cannot be empty!';
        header("Location:contact.php?name=$name_error");
        exit();
    } else {
        $_SESSION['name']   =   $name;
    }

    if ($email == '') {
        $email_error = 'Email field cannot be empty!';
        header("Location:contact.php?email=$email_error");
        exit();
    } else {
        $_SESSION['email']   =   $email;
    }

    if ($phone == '') {
        $phone_error = 'Phone field cannot be empty!';
        header("Location:contact.php?phone=$phone_error");
        exit();
    } else {
        $_SESSION['phone']   =   $phone;
    }

    if ($plan == '') {
        $plan_error = 'Plan field cannot be empty!';
        header("Location:contact.php?plan=$plan_error");
        exit();
    } else {
        $_SESSION['plan']   =   $plan;
    }
}


$query              =      "INSERT INTO clients (name, email, phone, plan, created_at, updated_at) 
                            VALUES ('$name', '$email', $phone, $plan, '2023-11-25', '2023-11-25');
                            ";
$datainserted       =       $connection->query($query);
if ($datainserted) {
    $message = "Mail send successfully!";
    header("location:contact.php?success=$message");
    echo "Data inserted successfully!";
} else {
    echo "Query failed!";
}

$connection->close();
