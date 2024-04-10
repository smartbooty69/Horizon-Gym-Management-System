<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Check if the message parameter is set
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

    // SQL query to fetch all member emails
    $sql = "SELECT memberName, memberEmail FROM member_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set to DEBUG_SERVER for debugging
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'samuelhanok@gmail.com';
            $mail->Password = 'gigc atbw ykcu cdeb';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set email parameters
            $mail->setFrom('samuelhanok@gmail.com', 'Horizon Gym');
            $mail->isHTML(true);
            $mail->Subject = 'GYM NOTICE';
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

            echo 'Messages have been sent to all gym members';

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    } else {
        echo "No members found in the database";
    }

    // Close connection
    $conn->close();
} else {
    echo "Message content not received";
}
?>
