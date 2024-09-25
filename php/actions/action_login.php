<?php
require_once "./../helper.php";

$email = trim($_POST["mail"]);
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));
addOldValue("mail", $email);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
  setErrorMessage("error", "Ошибка, пользователь $email не найден");
  errorMessage("mail", "Invalid email");
}

// PDO
$pdo = getPDO();
$sql = "SELECT * FROM reg WHERE email = :email";
$query = $pdo->prepare($sql);
$query->execute(["email" => $email]);
// !???
$user = $query->fetch(PDO::FETCH_ASSOC);
$password_verify = password_verify($password, $user["password"]);

if (!$user) {
  setErrorMessage("error", "Ошибка, пользователь $email не найден");
  redirect("./../../core/login.php");
}

if (!$password_verify) {
  setErrorMessage("error", " Неверный пароль");
  redirect("./../../core/login.php");
}
setUserData("id", $user['id']);
setUserData("username", $user['username']);
setUserData("avatar", $user['avatar']);

redirect("./../../core/profile.php");
//redirect("./check.php");
