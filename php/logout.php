<?php
require_once "./helper.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  logout();
}

redirect("./../core/profile.php");
