<?php
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='nischaylando4@gmail.com';
		$subject= 'Form Submission';
		$message= "Name: ".$name."\n"."Phone: ".$phone."\n". "Contacted you saying: "."\n\n".$msg; 
		$headers="From: ". $email;

		if(mail($to, $subject, $msg, $headers)){
			echo "Send Successful, Thanks!"." ".$name.", I will contact you shortly" ;
		}
		else {
			echo "Something went wrong!"
		}
	}
?>
