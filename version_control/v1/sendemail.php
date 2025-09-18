<? php 


// On form submit.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if($_POST['name'] != "") {
       
        $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);
        if ((!empty($name)) && (preg_match('/^[a-z\s]$/i', $name)) && (strlen($name) <= 50)) {
            $nametrim = $name;
        }
        else {
            $errors[] =
            'You may have forgot to enter your name or gone over our max 30 characters.';
        }

    }

    if($_POST['email'] != "") {
        
        $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
        if ((!empty($email)) || (!filter_Var($email, FILTER_VALIDATE_EMAIL))) {
            $errors[] = 'You forgot to enter your email address';
            $errors[] = 'or your email format is incorrect.';
            exit;
        }

    }

    if($_POST['comment'] != "") {
        
        $comment = filter_var( $_POST['comment'], FILTER_SANITIZE_STRING);
        if ((!empty($comment)) && (preg_match('/^[a-zA-Z0-9\s\.\,\-]$/i', $comment)) && (strlen($comment) <= 3000)) {
            $commenttrim = $comment;
        }
        else {
            $errors[] =
            'You may have forgot to enter your message or gone over our max 3000 characters.';
        }


    }

    

    //Variables for email content
    $to = "info@4seasonsbrasserie.co.uk";
    $headers = "From: bookings@4seasonsbrasserie.co.uk \r\n";
    $headers .= "Reply-To: $email  \r\n";
    $headers .= "X-Mailer: PHP \r\n";
    $message = "You have received a new email from $name at $email. The message reads: $comment.";
   
    //send mail 
    if(mail($to,$message,$headers)) {
        echo '<script>alert ("Thank you for contacting us. We will be in touch shortly."); window.location ="contact.html"; </script>';
     
    } else { 
        echo '<script type="text/javascript">alert("We are sorry but the email did not go through."); window.location ="contact.html"; </script>';
            }







        }





?>