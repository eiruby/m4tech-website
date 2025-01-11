<?php
    require_once "conn.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
                        
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    
    function sanitizeData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Contact
    
    if (isset($_POST['submitContactForm'])) {
        $name = sanitizeData($_POST['name']);
        $email = sanitizeData($_POST['email']);
        $phone = sanitizeData($_POST['phone']);
        $subject = sanitizeData($_POST['subject']);
        $message = sanitizeData($_POST['message']);

        try {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'camilaenverzo12@gmail.com';
            $mail->Password = 'gwonuoyfpdovwfvc';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom($email, $name);
            $mail->addAddress('camilaenverzo12@gmail.com', 'M4Tech');
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = "<p>
                Name: <b>$name</b><br>
                Email: <b>$email</b><br>
                Phone: <b>$phone</b><br>
                Message:<br><br>
                $message
            </p>";

            $mail->send();
            $_SESSION['contact'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Thank you for contacting us. We'll get back to you soon!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            
        } catch (Exception $e) {
            $_SESSION['contact'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Message could not be sent.  PHPMailer Error: {$mail->ErrorInfo}
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }

        mysqli_close($conn);
    }

    // Price 

    if(isset($_POST['price_asc'])) {
        $_SESSION['sort'] = 'ASC';
    }
    
    if (isset($_POST['price_desc'])) {
        $_SESSION['sort'] = 'DESC';
    }
?>