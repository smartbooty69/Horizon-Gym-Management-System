<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['message'])) {
    $messageContent = $_POST['message'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "horizon_gym";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch members whose package is expiring within 5 days
    $currentDate = date('Y-m-d');
    $query = "SELECT memberName, memberEmail FROM member_details 
              WHERE DATEDIFF(packageExpiry, '$currentDate') <= 5";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set to DEBUG_SERVER for debugging
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'samuelhanok@gmail.com';
            $mail->Password = 'drjc knfx jnev ckwu';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set email parameters
            $mail->setFrom('samuelhanok@gmail.com', 'Horizon Gym');
            $mail->isHTML(true);
            $mail->Subject = 'Membership Expiry Reminder';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            // Loop through each member and send email
            while ($row = $result->fetch_assoc()) {
                $memberName = $row["memberName"];
                $memberEmail = $row["memberEmail"];

                // Set recipient and email body
                $mail->addAddress($memberEmail, $memberName);
                $mail->Body = 'Dear ' . $memberName . ',<br><br>' . $messageContent . '<br><br>Thank you,<br>Horizon Gym';

                // Send email
                $mail->send();

                // Clear all addresses and reset email body for next recipient
                $mail->clearAddresses();
                $mail->Body = '';
            }

            // Send success message to display in modal
            echo json_encode(array('success' => true, 'message' => 'Reminder emails have been sent successfully.'));

        } catch (Exception $e) {
            // Send error message to display in modal
            echo json_encode(array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo));
        }

    } else {
        // No members found
        echo json_encode(array('success' => false, 'message' => 'No members found whose membership is expiring within 5 days.'));
    }

    // Close connection
    $conn->close();
} else {
    // Message content not received
    echo json_encode(array('success' => false, 'message' => 'Message content not received.'));
}
?>
