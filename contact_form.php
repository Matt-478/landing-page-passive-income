<?php 
$myemail = 'matisskomlevs@gmail.com';
$name = $_POST['name_surname']; 
$email_address = $_POST['email']; 



if(isset($_POST["name_surname"])) {
  echo "Viss ok ar vārdu uzvārdu";
}
else{
  echo "Ir izveidojusies kļūda";
}

// supposed to send an email
// if( empty($errors)){

//   $to = $myemail;
//   $email_subject = "Contact form submission: $name";
//   $email_body = "You have received a new message. ".
//   " Here are the details:\n Name: $name \n ".
//   "Email: $email_address";

  
//   $headers = "From: $myemail\n";
//   $headers .= "Reply-To: $email_address";
//   mail($to,$email_subject,$email_body,$headers);
//   }
?>