<?php 
      include('form_process.php'); ?>
<link rel="stylesheet" type="text/css" href="./style.css">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <title>Forma</title>
</head>
<body>

<!-- <form id="contact" method="POST" name="contact_form" action="<?php $_SERVER['PHP_SELF']; ?>" class="relative"> -->
<form action="contact_form.php" method="POST" name="contact_form" id="contact" class="relative">
    <span><h3>Reģistrējies!</h3></span>
    <input type="text" name="name_surname" placeholder="Vārds Uzvārds" value="<?php $name ?>" required>
    <span class="error"><?= $name_error ?></span>

    <input type="email" name="email" placeholder="Jūsu e-pasts" value="<?php $email ?>" required>
    <span class="error"><?= $email_error ?></span>

      <select id="select" name="choices" value="<?php $choices ?>" required>
        <option selected>Izvēlies saziņas veidu</option>
        <option value="Instagram">Instagram</option>
        <option value="Skype">Skype</option>
        <option value="Zoom">Zoom</option>
        <option value="Google_Meet">Google Meet</option>
      </select>

    <span class="error"><?= $choices_error ?></span>

    <button name="submit" type="submit" id="form-submit" class="submit-btn">Gatavs!</button>
    <div class="success"><?= $success; ?></div>
   
  </form>
  
</body>
</html>