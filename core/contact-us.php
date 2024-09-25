<!doctype html>
<?php
$title = 'Contact us - Game Dev';
require_once "./components/header.php"; ?>
<section class="section__contact-us">
  <div class="container">
    <div class="contact-us__text">
      <div class="contact-us__nav">
        <a href="./nav.html">Home &gt;</a> Contact us
      </div>
      <h2 class="contact-us__title">
        Lorem Ipsum is simply dummy text of the printing and.
      </h2>
      <p class="contact-us__desc">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </p>
    </div>
    <div class="contact-us__img">
      <img src="./../img/contact-us/maps.png" alt="Maps"/>
    </div>
    <div class="contact-us__wrapper-cards">
      <div class="contact-us__card--icons">
        <h4 class="contact-us__card--title">Follow us</h4>
        <div class="contact-us__icons-wrapper">
          <div class="contact-us__icon">
            <img src="./../img/contact-us/facebook.svg" alt="Facebook"/>
          </div>
          <div class="contact-us__icon">
            <img
                src="./../img/contact-us/instagram.svg"
                alt="Instagram"
            />
          </div>
          <div class="contact-us__icon">
            <img src="./../img/contact-us/twitter.svg" alt="Twitter"/>
          </div>
          <div class="contact-us__icon">
            <img src="./../img/contact-us/linkedin.svg" alt="Linkedin"/>
          </div>
        </div>
      </div>
      <div class="contact-us__card--phone">
        <div class="card--phone__img">
          <img src="./../img/contact-us/phone.svg" alt="Phone"/>
        </div>
        <a href="tel:+94444455556">+94 4444 5555 6</a>
      </div>
      <div class="contact-us__card--adr">
        <div class="card--adr__img">
          <img src="./../img/contact-us/gps.svg" alt="Gps"/>
        </div>
        <p class="card--adr__desc">
          but also the leap into electronic typesetting
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section__form-hello">
  <div class="form-hello__wrapper">
    <div class="container">
      <div class="form-hello__text">
        <h3 class="form-hello__title">Say hello</h3>
        <p class="form-hello__desc">
          Lorem Ipsum is simply dummy text of the printing .
        </p>
      </div>
      <form class="form">
        <div class="form__name">
          <div class="form__name--wrapper form__label--wrapper">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" class="input__sayHello"/>
          </div>
          <div class="form__name--wrapper form__label--wrapper">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" class="input__sayHello"/>
          </div>
        </div>
        <div class="form__mail form__label--wrapper">
          <label for="email">Email Address</label>
          <input type="mail" id="email" class="input__sayHello"/>
        </div>
        <div class="form__textarea form__label--wrapper">
          <label for="message">Message</label>
          <textarea id="message"></textarea>
        </div>
        <div class="form__button">
          <input
              type="submit"
              class="button button--form--sayHello"
              value="Get in touch"
          />
        </div>
      </form>
    </div>
  </div>
</section>
<section class="section__email">
  <div class="container">
    <div class="email__main">
      <h2>Lorem Ipsum</h2>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </p>
    </div>
    <div class="email__form-wrapper">
      <div class="email__form-text">
        <h3>Stay in the loop</h3>
        <p>
          Subscribe to receive the latest news and updates about TDA. We
          promise not to spam you!
        </p>
      </div>
      <div class="email__form">
        <form action="#!">
          <input
              type="email"
              placeholder="Enter email address"
              name="email"
              class="email__form-input"
          />
          <input
              type="submit"
              value="Continue"
              name="button"
              class="button button--form"
          />
        </form>
      </div>
    </div>
  </div>
</section>
</div>
<?php require_once "./components/footer.php"; ?>
</body>
</html>
