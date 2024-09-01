<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user's data from the 'register' table
    $result = mysqli_query($conn, "SELECT * FROM register WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        // Verify if the password matches
        if ($password == $row["password"]) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION["username"] = $row["username"]; // Storing the username in the session

            // Redirect to the profile page with the username in the query string
            header("Location: profile.php?username=" . urlencode($row['username']));
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
            header("Location: login.php");
            exit();
        }
    } else {
        echo "<script>alert('User Not Registered');</script>";
        header("Location: register.php");
        exit();
    }
}
?>
