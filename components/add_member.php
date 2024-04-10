<?php
$con = new mysqli("localhost", "root", "", "horizon_gym");
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
} 

if (isset($_POST['submit'])) {
    $uploadDirectory = __DIR__ . '/uploads/';

    $memberName = $_POST['memberName'];
    $joinDate = $_POST['joinDate'];
    $membershipPackage = $_POST['membershipPackage'];
    $memberPhone = $_POST['memberPhone'];
    $memberEmail = $_POST['memberEmail'];
    $memberAddress = $_POST['memberAddress'];
    $memberGender = $_POST['memberGender'];

    // Calculate age from date of birth
    $dateOfBirth = $_POST['dateOfBirth']; // Assuming this is the name of your date of birth field
    $dob = new DateTime($dateOfBirth);
    $now = new DateTime();
    $age = $now->diff($dob)->y;

    $memberImage = $_FILES['memberImage'];
    $fileName = basename($memberImage['name']);
    $destination = $uploadDirectory . $fileName;

    if ($memberImage['error'] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($memberImage['tmp_name'], $destination)) {
            $ins = "INSERT INTO member_details (memberImage, memberName, joinDate, membershipPackage, memberPhone, memberEmail, memberAge, memberAddress, memberGender) VALUES ('$fileName', '$memberName', '$joinDate', '$membershipPackage', '$memberPhone', '$memberEmail', '$age', '$memberAddress', '$memberGender')";

            if ($con->query($ins)) {
                echo "Data added successfully.";
            } else {
                echo "Error adding data: " . $con->error;
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Error uploading image.";
    }
}

$con->close();
header("location:../components/dashboard.php");
exit; 
?>

