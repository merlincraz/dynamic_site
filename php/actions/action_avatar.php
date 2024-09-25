<?php
require_once "./../helper.php";
$image = $_FILES['avatar'];

$type = ['image/jpeg', 'image/jpg', 'image/png', 'image/svg + xml'];
if (!in_array($image['type'], $type)) {
  setErrorImage('avatar', 'Неверный формат изображения');
  redirect("./../../core/profile.php");
  exit();
};

$fileSize = $image['size'] / 1000000;
$maxSize = 2;
if ($fileSize > $maxSize) {
  setErrorImage('avatar', 'Вес изображения должен быть не больше ' . $maxSize . " мб");
  redirect("./../../core/profile.php");
  exit();
}

echo "<pre>";
print_r($_FILES['avatar']);
echo "</pre>";


if (!is_dir("./../../uploads")) {
  mkdir("./../../uploads", 0777, true);
};
$extensions = pathinfo($image['name'], PATHINFO_EXTENSION);
$filename = md5(time()) . "." . $extensions;
move_uploaded_file($image['tmp_name'], "./../../uploads/" . $filename);

if (isset($_POST['save'])) {
  $pdo = getPDO();
  $sql = "UPDATE reg SET avatar = :avatar; SELECT * FROM reg";
  $query = $pdo->prepare($sql);
  $query->execute(['avatar' => $filename]);
// !???
  $user = $query->fetch(PDO::FETCH_ASSOC);
//setUserData('newAvatar', $user['avatar']);
  setNameImg(true);
  redirect("./../../core/profile.php");
}



//redirect("./check.php");
