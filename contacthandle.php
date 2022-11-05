<?php
    if(!empty('send-btn')) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "yourmail@gmail.com";
        $mailheader = "Name: " . $name . "\n" . "Email: " . $email . "\n" ."Message: " .$message;

        if(mail($to, $subject, $mailheader)) {
            ?>
              <script language="javascript" type="text/javascript">
                alert('Thank you for the message. We will contact you shortly.');
                window.location = 'success.php';
              </script>
            <?php
        }
    }
?>