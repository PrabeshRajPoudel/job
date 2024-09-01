<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthathome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submitted'])) {
    // Collect form data
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $birth = $conn->real_escape_string($_POST['birth']);
    $servicefor = isset($_POST['servicefor']) ? $conn->real_escape_string($_POST['servicefor']) : '';
    $gender = $conn->real_escape_string($_POST['gender']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $allergies = $conn->real_escape_string($_POST['allergies']);
    $medical_history = $conn->real_escape_string($_POST['medical_history']);
    $emergencyname = $conn->real_escape_string($_POST['emergencyname']);
    $relationship = $conn->real_escape_string($_POST['relationship']);
    $emergencyphone = $conn->real_escape_string($_POST['emergencyphone']);
    $services = isset($_POST['services']) ? implode(", ", $_POST['services']) : '';
    $otherservices = $conn->real_escape_string($_POST['otherservices']);

    // Handle file uploads
    $uploads_dir = 'uploads/';
    $errors = [];

    $report1 = $report2 = $report3 = "";

    foreach (['report1', 'report2', 'report3'] as $report) {
        if (isset($_FILES[$report]) && $_FILES[$report]['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES[$report]['tmp_name'];
            $name = basename($_FILES[$report]['name']);
            $path = $uploads_dir . $name;

            if (move_uploaded_file($tmp_name, $path)) {
                ${$report} = $name;
            } else {
                $errors[] = "Error uploading $report.";
            }
        } elseif (isset($_FILES[$report]) && $_FILES[$report]['error'] !== UPLOAD_ERR_NO_FILE) {
            $errors[] = "Error with $report upload: " . $_FILES[$report]['error'];
        }
    }

    if (empty($errors)) {
        // Check if email already exists
        $sqlCheckEmail = "SELECT * FROM patient WHERE email = '$email'";
        $result = $conn->query($sqlCheckEmail);

        if ($result->num_rows > 0) {
            echo "<div class='alert alert-danger'>Email address already exists.</div>";
        } else {
            // Insert data into the database
            $sql = "INSERT INTO patient (fullname, birth, servicefor, gender, address, phone, email, username, allergies, medical_history, emergencyname, relationship, emergencyphone, services, otherservices, report1, report2, report3) 
                    VALUES ('$fullname', '$birth', '$servicefor', '$gender', '$address', '$phone', '$email', '$username', '$allergies', '$medical_history', '$emergencyname', '$relationship', '$emergencyphone', '$services', '$otherservices', '$report1', '$report2', '$report3')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to profile page with username in the URL
                header("Location: profile.php?username=" . urlencode($username));
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }

    $conn->close();
}
