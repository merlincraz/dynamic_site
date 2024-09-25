<?php
$title = 'Sign in - Game Dev';
require_once "./components/header.php"; ?>
<section class="section__form-hello" style="margin-top: 0;">
  <div class="form-hello__wrapper">
    <div class="container">
      <div class="form-hello__text">
        <h3 class="form-hello__title">Sign in</h3>
        <p class="form-hello__desc">
          Lorem Ipsum is simply dummy text of the printing .
        </p>
      </div>
      <!-- enctype="multipart/form-data" --- для отправки файлов форме -->
      <form class="form" method="post" action="./../php/actions/action_sign_in.php">
        
        <div class="form__name">
          <div class="form__name--wrapper form__label--wrapper">
            <!-- error classes 1 --- label--error ||2 --- input__sayHello--error -->
            <!-- username -->
            <label for="firstNamed">Username</label>
            <input
                type="text"
                id="firstName"
                name="username"
                class="input__sayHello <?php classErrorInput("username"); ?>"
                placeholder="Your username"
                value="<?php echo old("username"); ?>"
                lang="ru"
            />
            <label for="firstNamed" class="<?php classErrorLabel("username"); ?>">
              <?php filedName("username"); ?>
            </label>
          </div>
          <div class="form__name--wrapper form__label--wrapper">
            <!-- name -->
            <label for="lastName">Your name</label>
            <input
                type="text"
                id="lastName"
                name="name"
                class="input__sayHello <?php classErrorInput("name"); ?>"
                placeholder="Your real name"
                value="<?php echo old("name"); ?>"
                lang="ru"
            />
            <label for="lastName" class="<?php classErrorLabel("name"); ?>">
              <?php filedName("name"); ?>
            </label>
          </div>
        </div>
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
              placeholder="Password"/>
          <label for="pass" class="<?php classErrorLabel("password"); ?>">
            <?php filedName("password"); ?>
          </label>
          <!-- confirm password -->
          <label for="con_pass">Confirm password</label>
          <input
              type="password"
              id="con_pass"
              name="confirm_password"
              class="input__sayHello <?php classErrorInput("confirm_password"); ?>"
              placeholder="Confirm password"/>
          <label for="con_pass" class="<?php classErrorLabel("confirm_password"); ?>">
            <?php filedName("confirm_password"); ?>
          </label>
        </div>
        <div class="form__button">
          <input
              type="submit"
              name="submit"
              class="button button--form--sayHello"
              value="Sign in"
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
