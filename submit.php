<?php
include 'db_connect.php'; // Include database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $course_name = $_POST['course_name'];
    $stream = $_POST['stream'];

    // Insert data into database
    $sql = "INSERT INTO online_inquiry (name, gender, dob, city, state, mobile, email, course_name, stream) 
            VALUES ('$name', '$gender', '$dob', '$city', '$state', '$mobile', '$email', '$course_name', '$stream')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
