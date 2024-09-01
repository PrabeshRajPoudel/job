<?php
include 'db.php'; // Include the database connection file

// Check if the username is passed in the query string
if (isset($_GET['username'])) {
    // Sanitize the input to prevent SQL Injection
    $username = $conn->real_escape_string($_GET['username']);

    // Fetch patient information from the database using username
    $sql = "SELECT * FROM patient WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<div class='container mt-5'><div class='alert alert-warning' role='alert'>No record found</div></div>";
        exit;
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-warning' role='alert'>No username provided</div></div>";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health At Home - Patient Profile</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-2 profile-title">Patient Profile</h2>

        <!-- Patient Biodata -->
        <div class="row my-2 py-3 profile-section">
            <div class="col-md-12">
                <div class="card profile-card">
                    <div class="card-header profile-card-header">
                        Patient Biodata
                    </div>
                    <div class="card-body profile-card-body">
                        <table class="table profile-table">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo htmlspecialchars($row['fullname'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td><?php echo htmlspecialchars($row['birth'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo htmlspecialchars($row['gender'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo htmlspecialchars($row['address'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td><?php echo htmlspecialchars($row['phone'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo htmlspecialchars($row['email'] ?? 'Not available'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Medical History -->
        <div class="row my-2 py-3 profile-section">
            <div class="col-md-12">
                <div class="card profile-card">
                    <div class="card-header profile-card-header">
                        Medical History
                    </div>
                    <div class="card-body profile-card-body">
                        <p><?php echo nl2br(htmlspecialchars($row['medical_history'] ?? 'Not available')); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Emergency Contact -->
        <div class="row my-2 py-3 profile-section">
            <div class="col-md-12">
                <div class="card profile-card">
                    <div class="card-header profile-card-header">
                        Emergency Contact
                    </div>
                    <div class="card-body profile-card-body">
                        <table class="table profile-table">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo htmlspecialchars($row['emergencyname'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Relationship</th>
                                    <td><?php echo htmlspecialchars($row['relationship'] ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td><?php echo htmlspecialchars($row['emergencyphone'] ?? 'Not available'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Previous Medical Reports -->
        <div class="row my-2 py-3 profile-section">
            <div class="col-md-12">
                <div class="card profile-card">
                    <div class="card-header profile-card-header">
                        Previous Medical Reports
                    </div>
                    <div class="card-body profile-card-body">
                        <table class="table profile-table">
                            <tbody>
                                <tr>
                                    <th>Report 1</th>
                                    <td>
                                        <?php if (!empty($row['report1'])): ?>
                                            <a href="uploads/<?php echo htmlspecialchars($row['report1']); ?>" target="_blank">View Report 1</a>
                                        <?php else: ?>
                                            Not available
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Report 2</th>
                                    <td>
                                        <?php if (!empty($row['report2'])): ?>
                                            <a href="uploads/<?php echo htmlspecialchars($row['report2']); ?>" target="_blank">View Report 2</a>
                                        <?php else: ?>
                                            Not available
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Report 3</th>
                                    <td>
                                        <?php if (!empty($row['report3'])): ?>
                                            <a href="uploads/<?php echo htmlspecialchars($row['report3']); ?>" target="_blank">View Report 3</a>
                                        <?php else: ?>
                                            Not available
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
