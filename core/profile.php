<?php
$title = 'Profile - Game Dev';
require_once "./components/header.php";
checkAuth(); ?>
<section class="section__profile">
  <form action="./../php/actions/action_avatar.php" method="post" enctype="multipart/form-data">
    <div class="profile__avatar">
      <abbr title="Choose avatar">
        <label class="input-file">
          <input type="file" accept=".jpg, .jpeg, .png" name="avatar" multiple>
          <img src="<?php
          if (hasNameImg()) {
            getNameImg();
            echo "./../uploads/" . getUserData('newAvatar');
          } else {
            echo "./../uploads/avatar/avatar.svg";
          }
          ?>" alt="<?php echo $_SESSION["user"]["username"]; ?>" class="avatar">
        </label>
      </abbr>
      <button type="submit" class="button button--save-img" lang="ru" name="save">Сохранить</button>
      <?php if (hasErrorImage('avatar')) : ?>
        <span class="error"><?php echo getErrorImage('avatar'); ?></span>
      <?php endif; ?>
    </div>
  </form>
  <div class="icons-games__text">
    <h2>Hello, <?php echo $_SESSION["user"]["username"]; ?>!</h2>
    <p>Description of your profile</p>
  </div>
</section>
</div>
<?php require_once "./components/footer.php"; ?>
</body>
</html>
