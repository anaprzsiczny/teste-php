<?php

function validateInput() {
  $errors = [];
  foreach($_POST as $inputName => $inputValue) {
    if(empty($inputValue)) {
      $errors[] = "O campo {$inputName} deve ser preenchido! <br/>";
    }
  }
  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Formato de e-mail inválido! <br/>";
  }
  if(!preg_match("/^(\(?[0-9]{2}\)?|[-. ]?)[-. ]?[0-9]{4,5}[-. ]?[0-9]{4}$/", $_POST['phone'])) {
    $errors[] = "Formato de telefone inválido! <br/>";
  }
  return $errors;
}

$errors = validateInput();

if(!empty($errors)) {
  $errorsAsString = implode($errors);
  header("Location: 4.php?errors={$errorsAsString}");
  exit;
}

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$password = md5($_POST['password']);

$info = [$name, $lastName, $email, $phone, $login, $password];

$file = fopen("registros.txt", "a");
$data = file("registros.txt");
fwrite($file, serialize($data[] = $info));
fclose($file);

$success = "Registro salvo com sucesso.";
header("Location: 4.php?success={$success}");
exit;