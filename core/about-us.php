<?php
$title = "О нас";
require_once "./components/header.php";
?>
<section class="git__details">
  <div class="container">
    <div class="git__wrapper">
      <div class="git__text">
        <p class="git__special-text">
          <a href="./../nav.php">Home &gt;</a>About us
        </p>
        <h1 class="git__special-main">
          Lorem Ipsum is simply dummy text of the printing and.
        </h1>
        <p class="git__special-desc">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy
          text ever since the 1500s.
        </p>
        <a href="#" class="button button--git"
        >Get in touch
          <span class="button-git--arrow"
          ><img
                src="./../img/about-us/git/arrow-links.svg"
                alt=""/></span
          ></a>
      </div>
    </div>
  </div>
  <div class="git__img">
    <img src="./../img/about-us/git/git.jpg" alt="wall"/>
    <div class="git__img--nav">
      <div class="git__img--nav--wrapper">
        <button>
          <img src="./../img/about-us/git/arrow-left.svg" alt="Left"/>
        </button>
        1 of 2
        <button>
          <img src="./../img/about-us/git/arrow-right.svg" alt="right"/>
        </button>
      </div>
    </div>
  </div>
</section>
<section class="section__work-cards">
  <div class="container">
    <h3 class="work-cards__title">Why work with us</h3>
    <div class="work-cards--wrapper">
      <div class="work-cards--wrapper-card">
        <div class="work-cards--wrapper__text">
          <p class="work-cards--color work-cards--color--1">
            Lorem ipsum
          </p>
          <h4 class="work-cards--title">Lorem Ipsum</h4>
          <p class="work-cards--desc">
            Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s,
          </p>
        </div>
      </div>
      <div class="work-cards--wrapper-card">
        <div class="work-cards--wrapper__text">
          <p class="work-cards--color work-cards--color--2">
            Lorem ipsum
          </p>
          <h4 class="work-cards--title">Lorem Ipsum</h4>
          <p class="work-cards--desc">
            Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s,
          </p>
        </div>
      </div>
      <div class="work-cards--wrapper-card">
        <div class="work-cards--wrapper__text">
          <p class="work-cards--color work-cards--color--3">
            Lorem ipsum
          </p>
          <h4 class="work-cards--title">Lorem Ipsum</h4>
          <p class="work-cards--desc">
            Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s,
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section__text-game">
  <div class="text-game--wrapper">
    <div class="container text-game--container">
      <div class="text-game__img">
        <img src="./../img/about-us/text-game/game.jpg" alt="Game"/>
      </div>
      <div class="text-game__text">
        <p class="text-game__name">Lorem ipsum</p>
        <h3 class="text-game__title">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry.
        </h3>
        <p class="text-game__desr">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy
          text ever since the 1500s, when an unknown printer took a galley
          of type and scrambled it to make a type specimen book. It has
          survived not only five centuries,
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section__team-cards">
  <div class="container">
    <h3 class="team-cards__title">Our Team</h3>
    <div class="team-cards--wrapper">
      <div class="team-cards__card">
        <div class="team-cards__img">
          <img
              src="./../img/about-us/team-cards/avatar_1.svg"
              alt="Avatar"
          />
        </div>
        <h4 class="team-cards__name">John peter</h4>
        <p class="team-cards__job">COO</p>
      </div>
      <div class="team-cards__card">
        <div class="team-cards__img">
          <img
              src="./../img/about-us/team-cards/avatar_2.svg"
              alt="Avatar"
          />
        </div>
        <h4 class="team-cards__name">John peter</h4>
        <p class="team-cards__job">COO</p>
      </div>
      <div class="team-cards__card">
        <div class="team-cards__img">
          <img
              src="./../img/about-us/team-cards/avatar_3.svg"
              alt="Avatar"
          />
        </div>
        <h4 class="team-cards__name">John peter</h4>
        <p class="team-cards__job">COO</p>
      </div>
      <div class="team-cards__card">
        <div class="team-cards__img">
          <img
              src="./../img/about-us/team-cards/avatar_4.svg"
              alt="Avatar"
          />
        </div>
        <h4 class="team-cards__name">John peter</h4>
        <p class="team-cards__job">COO</p>
      </div>
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
