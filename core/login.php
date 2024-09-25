<?php
$title = 'Log in - Game Dev';
require_once "./components/header.php";
checkGuest(); ?>
<section class="section__form-hello" style="margin-top: 0;">
  <div class="form-hello__wrapper">
    <div class="container">
      <div class="form-hello__text">
        <h3 class="form-hello__title">Login</h3>
        <p class="form-hello__desc">
          Lorem Ipsum is simply dummy text of the printing
        </p>
      </div>
      <!-- enctype="multipart/form-data" --- для отправки файлов форме -->
      <form class="form" method="post" action="./../php/actions/action_login.php">
        <?php if (hasErrorMessage("error")): ?>
          <div class="error"><?php echo getErrorMessage("error"); ?></div>
        <?php endif; ?>
        <div class="form__mail form__label--wrapper">
          <!-- email -->
          <label for="email">Email Address</label>
          <input
              type="mail"
              id="email"
              name="mail"
              class="input__sayHello <?php classErrorInput("mail"); ?>"
              placeholder="example@mail.ru"
              value="<?php echo old("mail"); ?>"
          />
          <label for="email" class="<?php classErrorLabel("mail"); ?>">
            <?php filedName("mail"); ?>
          </label>
        </div>
        <div class="form__mail form__label--wrapper">
          <!-- password -->
          <label for="pass">Password</label>
          <input
              type="password"
              id="pass"
              name="password"
              class="input__sayHello <?php classErrorInput("password"); ?>"
              placeholder="Password"
          />
          <label for="pass" class="<?php classErrorLabel("password"); ?>">
            <?php filedName("password"); ?>
          </label>
        </div>
        <div class="form__button">
          <input
              type="submit"
              name="submit"
              class="button button--form--sayHello"
              value="Log in"
          />
        </div>
      </form>
      <?php clearValidation(); ?>
    </div>
  </div>
</section>
</div>
<?php require_once "./components/footer.php"; ?>

</body>
</html>
