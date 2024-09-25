<?php
// Начинаем сессию
require_once "./../php/helper.php"; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="./../css/main.css"/>
</head>
<body>
<div class="wrapper">
  <header class="header">
    <nav class="nav">
      <div class="header__container header__markup">
        <div class="nav__logo">LOGO</div>
        <ul class="nav__menu-list">
          <li><a href="./nav.php">Home</a></li>
          <li><a href="./about-us.php">About us</a></li>
          <li><a href="./portfolio.php">Portfolio</a></li>
          <li><a href="./news.php">News</a></li>
          <?php if (!isset($_SESSION['user']['id'])) : ?>
            <li><a href="./sign_in.php">Sign in</a></li>
            <li><a href="./login.php">Login</a></li>
          <?php endif; ?>
          <?php if (isset($_SESSION['user']['id'])) : ?>
            <li><a href="./profile.php">Profile</a></li>
          <?php endif; ?>
        </ul>
        <a class="button" href="./contact-us.php">Contact Us</a>
        <?php if (isset($_SESSION['user']['id'])) : ?>
          <form action="./../php/logout.php" method="post">
            <button class="button button--logout">Log out</button>
          </form>
        <?php endif; ?>
      </div>
    </nav>
  </header>
