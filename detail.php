<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health At Home - Index</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'carousel.php'; ?>

    <h2 class="my-2 py-3">Patient Information Form</h2>
    <form action="submit-patient.php" method="post" enctype="multipart/form-data">
        <!-- Patient Details -->
        <fieldset>
            <legend>Patient Details</legend>
            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="fullname" required><br><br>

            <label for="birth">Date of Birth:</label>
            <input type="date" id="birth" name="birth" required><br><br>

            <label for="birth">Service For:</label>
            <input type="date" id="servicefor" name="servicefor" required><br><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="allergies">Allergies:</label>
            <input type="text" id="allergies" name="allergies"><br><br>

            <label for="medical_history">Medical History:</label>
            <textarea id="medical_history" name="medical_history" rows="4" cols="50"></textarea><br><br>
        </fieldset>

        <!-- Emergency Contact -->
        <fieldset>
            <legend>Emergency Contact Information</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required><br><br>

            <label for="relationship">Relationship:</label>
            <input type="text" id="relationship" name="relationship" required><br><br>

            <label for="emergencyphone">Emergency Contact Phone:</label>
            <input type="tel" id="emergencyphone" name="emergencyphone" required><br><br>
        </fieldset>

        <!-- Service Selection -->
        <fieldset>
            <legend>Services Required</legend>
            <label for="postSurgeryCare">Post-Surgery Care:</label>
            <input type="checkbox" id="postSurgeryCare" name="services[]" value="Post-Surgery Care"><br><br>

            <label for="elderlyCare">Elderly Care:</label>
            <input type="checkbox" id="elderlyCare" name="services[]" value="Elderly Care"><br><br>

            <label for="medicationManagement">Medication Management:</label>
            <input type="checkbox" id="medicationManagement" name="services[]" value="Medication Management"><br><br>

            <label for="physicalTherapy">Physical Therapy:</label>
            <input type="checkbox" id="physicalTherapy" name="services[]" value="Physical Therapy"><br><br>

            <label for="other_services">Other Services:</label>
            <input type="text" id="other_services" name="otherservices"><br><br>
        </fieldset>

        <!-- File Upload -->
        <fieldset>
            <legend>Upload Medical Reports</legend>
            <label for="report1">Upload Report 1:</label>
            <input type="file" id="report1" name="report1"><br><br>

            <label for="report2">Upload Report 2:</label>
            <input type="file" id="report2" name="report2"><br><br>

            <label for="report3">Upload Report 3:</label>
            <input type="file" id="report3" name="report3"><br><br>
        </fieldset>

        <button type="submit" name="submitted">Submit</button>
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>
