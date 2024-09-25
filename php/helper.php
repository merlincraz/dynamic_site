<?php
session_start();
const DB_HOST = "localhost";
const DB_NAME = "dynamic_site";
const DB_PORT = "3306";
const DB_USER = "root";
const DB_PASS = "";
// f перенаправление header
function redirect (string $path)
{
  header("Location: $path");
  die();
}

// pdo
function getPDO ()
{
  try {
    return new PDO(
      "mysql:host=" .
      DB_HOST .
      ";dbname=" .
      DB_NAME .
      ";port=" .
      DB_PORT .
      ";charset=utf8",
      DB_USER,
      DB_PASS
    );
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// f текста в теге label
function filedName (string $name)
{
  echo $_SESSION["validation"][$name];
}

// f класса css в теге label
function classErrorLabel (string $name)
{
  echo $_SESSION["validation"][$name] ? "label--error" : "hidden";
}

// f класса css в теге input
function classErrorInput (string $name)
{
  echo $_SESSION["validation"][$name] ? "input__sayHello--error" : "";
}

// f проверки if/else, где message это текст в теге label
function errorMessage (string $name, string $message)
{
  $_SESSION["validation"][$name] = $message;
}

// f очистки сессии
function clearValidation ()
{
  $_SESSION["validation"] = [];
}

// f старого значения
function addOldValue (string $key, mixed $value): void
{
  $_SESSION["old"][$key] = $value;
}

// f старого значения в полях input
function old (string $key)
{
  $value = $_SESSION["old"][$key] ?? "";
  unset($_SESSION["old"][$key]);
  return $value;
}

// f сообщения об ошибке авторизации
function setErrorMessage (string $key, string $message): void
{
  $_SESSION["message"][$key] = $message;
}

// f текста сообщения <div> setErrorMessage()
function getErrorMessage (string $key)
{
  $message = $_SESSION["message"][$key] ?? "";
  unset($_SESSION["message"][$key]);
  return $message;
}

// f обнуления сессии с ключом, который содержит в себе ошибку при регистрации или входе
function hasErrorMessage (string $key): bool
{
  return isset($_SESSION["message"][$key]);
}

function setErrorImage (string $avatar, string $message)
{
  $_SESSION['profile'][$avatar] = $message;
}

function getErrorImage (string $image)
{
  $typeImage = $_SESSION['profile'][$image] ?? '';
  unset($_SESSION['profile'][$image]);
  return $typeImage;
}

function hasErrorImage ($image): bool
{
  return isset($_SESSION['profile'][$image]);
}


// f записи сессии ключа, который содержит в себе столбец БД
function setUserData (string $key, $user)
{
  return $_SESSION['user'][$key] = $user;
}

// f о возвращении сессии ключа, который содержит в себе столбец БД
function getUserData (string $key)
{
  return $_SESSION['user'][$key];
}

// f выхода из сессии и БД
function logout ()
{
  unset($_SESSION['user']);
  redirect("./../core/login.php");
}

function avatarName ()
{
  $directory = './../uploads/avatar';
  if ($handle = opendir($directory)) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        return $entry;
      }
    }
    closedir($handle);
  }
}

function getNameImg ()
{
  $pdo = getPDO();
  $sql = "SELECT * FROM reg";
  $query = $pdo->query($sql);
// !???
  $user = $query->fetch();
  setUserData('newAvatar', $user['avatar']);
}

function setNameImg ($value)
{
  $_SESSION['avatarFile'] = $value;
}

function hasNameImg ()
{
  return $_SESSION['avatarFile'];
}

function checkAuth ()
{
  if (!isset($_SESSION['user']['id'])) {
    redirect("./login.php");
  }
}

function checkGuest ()
{
  if (isset($_SESSION['user']['id'])) {
    redirect("./profile.php");
  }
}