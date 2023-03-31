<?php

require_once("includes/database.php");
require_once("includes/functions.php");
$db = new Database();
$db_connection = $db->get_db_connection();
$menu_arr = ["home", "hola!", "projects", "contact"];
$projects = $db->get_all_projects($db_connection);
$slides_count = ceil(count($projects)/3);

page_header()
?>

    <header class="header-container">
        <nav>
          <div class="navbar container">
            <a href="#"><img class="logo-icon" data-src="img/icon.png" alt="portfolio icon" /></a>
            <ul class="nav-menu">
              <?php foreach($menu_arr as $item){
                $id = $item === "home"? "top": $item;?>
                <li class="nav-option">
                  <a class="nav-link" href="#<?=(clean($id))?>"><?=ucwords($item)?></a>
                </li>           
              <?php
              }
              ?>
            </ul>
            <button class="hamburger">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </button>
          </div>

        </nav>
      <main class="background-image-container">
        <div class="background-image">
          <h1 class="title-heading">Benito Beceiro</h1>
          <p class="title-subHeading">A Web Developer</p>
        </div>
      </main>
    </header>
    <main class="main-section" >
      <div id="hola" class="dots"></div>
      <section  class="introduction-section container">
        <div class="introduction-text ">
          <h2 class="introduction-title text-title">Hola!</h3>
          <div class="introduction-text-text">
            <p>
              My name is Benito. I'm a friendly, hardworking, positive-minded
              person and I also have a "can-do" attitude.
            </p>
            <p>I can speak 3 languages, Spanish, English and Tagalog.</p>
            <p>
              I'm a self-taught web developer. I used to study +25 hours a week. But since August 28th last year, I've been working part time as a web developer but I still manage to put 13hours every week and the more I learn the more I like it.
            </p>
            <p>
              My short term goal is to find a job where I can provide business
              value and where I can continue to grow as a web developer.
            </p>
            <p>
              My long term goal is becoming an amazing web developer and being
              able to create more complex apps and help people solve their
              problems.
            </p>
            <p>
              I have good working knowledge of devtools, HTML, CSS, Bootstrap, JavaScript, php and mysql.
              I also know how to use Google Search Console, lighthouse and Merchant
            </p>
            <p>
              Next on my learning path will be React, but I'm open to learn other things that the company may need.
            </p>
          </div>
        </div>
        <div class="introduction-image"></div>
      </section>
      <div id="projects" class="dots"></div>
      <section  class="projects">

        <div class="projects-top-section container">
          <h2 class="projects-title text-title">
            My Projects
          </h2>
          <div class="indicator-container">
            <?php for($i=0;$i<$slides_count;$i++) {
              if($i === 0) {?>
                  <div data-indicator="<?=$i?>" class="indicator indicator-active"></div>          
            <?php
              }else {?>
                <div data-indicator="<?=$i?>" class="indicator"></div>
            <?php
              }
            }
            ?>
          </div>

        </div>
        <div class="projects-slider-container">
          <div class="projects-slider-track-holder">
            <div class="projects-slider-track">
              <?php display_slide($projects) ?>
            </div>
          </div>

          <button title="slider button left" class="slider-btn slider-btn-left">
            <i class="fa-solid fa-arrow-left"></i>
          </button>
          <button title="slider button right" class="slider-btn slider-btn-right">
            <i class="fa-solid fa-arrow-right"></i>
          </button>

        </div>

      </section>

      <div id="contact" class="dots"></div>

      <section class="get-inTouch">
        <div class="container">
          <h2 class="text-title">Contact Me</h2>

          <div class="accordion">

            <div class="panel  send-message">
              <div class="panel-heading">
                <h3 class="panel-heading-text">Send me a Message</h3>
                <span><i class="fa-sharp fa-solid fa-angle-down"></i></span>
              </div>
              <div class="panel-content ">
                <form action="send-email.php" method="GET">
                  <div class="input-group name">
                    <label for="name_input">
                      <span><i class="fa-solid fa-user"></i></span>
                      <input id="name_input" name="name_input" type="text" placeholder="Enter Name" required>

                    </label>
                  </div>
                  <div class="input-group email">
                    <label for="email_input">
                      <span><i class="fa-solid fa-envelope"></i></span>
                      <input id="email_input" name="email_input" type="email" placeholder="Email" required>

                    </label>
                  </div>
                  <div class="input-group text-area">
                    <label for="message"> <span><i class="fa-solid fa-pencil"></i></span>
                    <textarea id="message" cols="30" rows="5" name="message" placeholder="Message"></textarea>
                    </label>
                  </div>
                  <input class="card-btn" type="submit" value="submit">
                </form>
              </div>
            </div>

            <div class="panel contact-me">
              <div class="panel-heading">
                <h3 class="panel-heading-text">Contact Details</h3>
                <span><i class="fa-sharp fa-solid fa-angle-down"></i></span>
              </div>
              <div class="panel-content">
                <div class="contact-details-container">
                  <div class="contact-details mobile-details">
                    <h2 class="card-title">Mobile Number:</h2>
                    <p>07720 287143</p>
                  </div>
                  <div class="contact-details email-details">
                    <h2 class="card-title">Email:</h2>
                    <p>benito_bec@hotmail.com</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- <div class="container">
          <h2 class="get-inTouch-title text-title">Get In Touch</h2>
        </div> -->
      </section>
    </main>
<?php
page_footer();
