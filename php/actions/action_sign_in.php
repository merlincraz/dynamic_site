<?php
require_once "./../helper.php";

//!--- Получаем данные при помощи метода $_POST ---

$username = trim(filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS));
$name = trim(filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS));
$mail = trim(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL));
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));
$confirm_password = trim(
  filter_var($_POST["confirm_password"], FILTER_SANITIZE_SPECIAL_CHARS)
);
$avatar = avatarName();
//f old values

// Validation
$_SESSION["validation"] = [];

if (empty($username) || strlen($username) < 2) {
  errorMessage("username", "Invalid username");
}
if (empty($name) || strlen($name) < 2) {
  errorMessage("name", "Invalid name");
}
if (empty($mail) || strlen($name) < 2) {
  errorMessage("mail", "Invalid email");
}
if (empty($password) || strlen($password) < 4) {
  errorMessage("password", "Invalid password");
}
if (empty($confirm_password) || strlen($confirm_password) < 4) {
  errorMessage("confirm_password", "Invalid password");
}
if ($password !== $confirm_password) {
  errorMessage("confirm_password", "Passwords are not correct");
  errorMessage("password", "Passwords are not correct");
}
if (!empty($_SESSION["validation"])) {
  addOldValue("username", $username);
  addOldValue("name", $name);
  addOldValue("mail", $mail);
  redirect("./../../core/sign_in.php");
}

$password = password_hash($password, PASSWORD_DEFAULT);

//!--- Подключаемся к базе данных ---
//!--- try//catch -- для обнаружения и вывода ошибок во время подключения к базе даных
$pdo = getPDO();
//!--- Добавляем пользователя в базу данных ---

$sql =
  "INSERT INTO reg(username, name, email, password, avatar) VALUES(:username, :name, :email, :password, :avatar)";
$params = [
  "username" => $username,
  "name" => $name,
  "email" => $mail,
  "password" => $password,
  "avatar" => $avatar,
];
$query = $pdo->prepare($sql);
try {
  $query->execute($params);
} catch (Exception $e) {
  errorMessage("mail", "This email already exists");
  redirect("./../../core/sign_in.php");
}


//!--- Перенаправляем на страницу регистрации ---
redirect("./../../core/login.php");
//redirect("./../php/check.php");
