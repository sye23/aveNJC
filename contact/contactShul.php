<?php
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
		if(!empty($_POST['name'])) {
			$name = $_POST['name'];
		} else {
			$errors[] = 'Name is required';
		}
		
		if(isset($_POST['email'])) {
			$email = $_POST['email'];
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email'];
            } else {
                $errors[] = "This ($email) email address is considered invalid.\n";
            }
		

        if(!empty($_POST['subject'])) {
			$subject = $_POST['subject'];
		} else {
			$errors[] = 'Subject is required';
		}

        if(!empty($_POST['message'])) {
			$message = $_POST['message'];
		} else {
			$errors[] = 'Message is required';
		}
		
		if(empty($errors)) {
			$to = "shalomeisenbach@gmail.com";
            $txt = $message;
            $txt = str_replace("\n.", "\n..", $txt);
            $headers = "From:shalomeisenbach@gmail.com";

            mail($to,$subject,$txt,$headers);

            include 'contactShulSuccess.php';
       
        }
        }
        if(!empty($errors)) {
        
        include 'contactFail.php';
         
        }
        
}
?>

