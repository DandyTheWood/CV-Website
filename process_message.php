<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        die('All fields are required.');
    }

    $mail = new PHPMailer(true);

    try {
        // Nastavenie SMTP Serveru
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'webserverrpj@gmail.com';
        $mail->Password = 'lvqg kztz lqhe pwov';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        // Nastavenie Príjemcov emailov
        $mail->setFrom('webserverrpj@gmail.com', 'Daniel Molda Website');
        $mail->addAddress('webserverrpj@gmail.com');

        // Správa pre mňa
        $mail->Subject = "New Message from $name";
        $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $mail->send();

        // Nastavenie Príjemcov emailov
        $mail->clearAddresses(); // Vymaze zapísané adresy príjemcov
        $mail->setFrom('webserverrpj@gmail.com', 'Daniel Molda Website');
        $mail->addAddress($email);

        // Správa pre použivateľa
        $mail->Subject = "Feedback";
        $mail->Body    = "Thank you for your feedback $name\nFeel free to contact me again on danielmolda1@gmail.com";

        $mail->send();
        $fbMessage = 'Thank you for your feedback, ' . htmlspecialchars($name) . '!';
    } catch (Exception $e) {
        $fbMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    $fbMessage = 'Invalid request.';
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Molda</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="menu-container">
            <a href="index.html" class="dmolda_button">
                <span class="actual-text">&nbsp;Daniel&nbsp;Molda&nbsp;</span>
            </a>
        </div>
    </nav>
    <div class="main">
        <div class="d3">
            <h1 id="image_animation">
                <?php
                    echo $fbMessage;
                ?>
            </h1><br>
            <a href="index.html" class="dmolda_button">
                <span class="actual-text">&nbsp;Back&nbsp;to&nbsp;start&nbsp;</span>
            </a>
        </div>
    </div>
<footer>
    <p style="text-align: center;">
        Daniel Molda 2024-2025<br>
        email: danielmolda1@gmail.com
    </p>
</footer>
</body>

</html>
