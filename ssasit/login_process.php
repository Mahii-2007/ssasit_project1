<?php

include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM faculty WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

       header("location: dashboard.php");
        exit();

    } else {

        echo "Wrong Password";

    }

} else {

    echo "Email not found";

}

?>