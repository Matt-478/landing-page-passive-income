<?php 

//defines variables and sets to empty values
$name_error = $email_error = $choices_error = "";
$name = $email = $choices =  $success = "";

//form is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name_surname"])) {
    $name_error = "Šis lauks jāaizpilda obligāti";
  } else {
    $name = test_input($_POST["name_surname"]);
    //check if the name contains whitespaces and letters only
    if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $name_error = "Tikai burti un atstarpes ir atļauti šajā laukā";
    }
  }


  //email validation
  if(empty($_POST["email"])) {
    $email_error = "Šis lauks jāaizpilda obligāti";
  } else{
    $email = test_input($_POST["email"]);
    //check if email address is well-formed/ correct
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Nepareiza e-pasta forma";
    }
  }

  
  if($name_error == '' and $email_error == '') {
    $message_body = '';
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
      $message_body.= "$key: $value\n";
    }

  
    if(mail($to, $subject, $message)){
      $success = "Ziņa nosūtīta. Sazināsimies ar Tevi drīz!";
      $name = $email = $choices =  $succesful = "";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>