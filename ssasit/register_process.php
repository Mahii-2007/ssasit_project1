<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$role = $_POST['role'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


// Password check
if ($password != $confirm_password) {
    die("Password does not match");
}


// Email check
$sql = "SELECT * FROM faculty WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    die("Email already registered");
}


// Find Department ID
$sql = "SELECT department_id FROM department 
        WHERE department_name='$department'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Error:" .mysqli_error($conn));
}
if(mysqli_num_rows($result)>0){
     $row = mysqli_fetch_assoc($result);
    $department_id = $row['department_id'];  
}else{
    die("department not found");
}

$password = password_hash($password, PASSWORD_DEFAULT);
// Insert Faculty
$sql = "INSERT INTO faculty
        (name, email, role, password, department_id)
        VALUES
        ('$name', '$email', '$role', '$password', '$department_id')";

$result = mysqli_query($conn, $sql);


if ($result) {

    echo "Registration Successful";

    header("refresh:2;url=login.php");

} else {

    echo "Registration Failed";
    echo mysqli_error($conn);
}

?>