<?php

require "mailer.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hey, I'm Lukas.</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow|Cairo|Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="nav-menu" id="my_home">
      <ul>
        <li><a href="#my_home">HOME</a></li>  
        <li><a href="#my_skills">SKILLS</a></li> 
        <li><a href="#my_portfolio">PORTFOLIO</a></li>
        <li><a href="#my_about">ABOUT</a></li>
        <li><a href="#my_contact">CONTACT</a></li>
      </ul>
    </nav>
  </header>

  <section class="welcome">
    <div class="container">
      <h1>Hey, I'm Lukas.</h1>
      <h2>I'm a full-stack developer.</h2>
    </div>
  </section>

  <section class="appeal">
    <div class="container">
      <p>
        Let's work together to make your product stand out.
        I create beautiful and functional websites.
      </p>
    </div>
  </section>

  <section class="process">
    <div class="container">
      <div class="container2">
        <div class="process-container">
          <h2>Discover</h2>
          <p>Tell me about your project and we brainstorm together the features to create
            a plan for your product to launch.</p>
        </div>

        <div class="process-container">
          <h2>Design</h2>
          <p>We design the wireframe and agree together how to create the best experience
            for your users to present the brand.</p>
        </div>

        <div class="process-container">
          <h2>Deploy</h2>
          <p>We prototype and develope your product. We work together intensily to incorporate your
            feedback.</p>
        </div>

        <div class="process-container">
          <h2>Be ready</h2>
          <p>We deploy your product and now your website is ready to get the traction.
            Get out there and grow your audience.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="skills">
    <div class="container">
      <h3 id="my_skills">MY SKILLS</h3>

      <div class="HTML">
        <div class="item"><span>HTML</span></div>
        <div class="item1"></div>
        <div class="item2"><span>80%</span></div>
      </div>

      <div class="CSS">
        <div class="item"><span>CSS</span></div>
        <div class="item1"></div>
        <div class="item2"><span>80%</span></div>
      </div>

      <div class="JavaScript">
        <div class="item"><span>JavaScript</span></div>
        <div class="item1"></div>
        <div class="item2"><span>70%</span></div>
      </div>

      <div class="React">
        <div class="item"><span>React</span></div>
        <div class="item1"></div>
        <div class="item2"><span>60%</span></div>
      </div>

      <div class="PHP">
        <div class="item"><span>PHP</span></div>
        <div class="item1"></div>
        <div class="item2"><span>60%</span></div>
      </div>

      <div class="Laravel">
        <div class="item"><span>Laravel</span></div>
        <div class="item1"></div>
        <div class="item2"><span>60%</span></div>
      </div>

      <div class="SQL">
        <div class="item"><span>SQL</span></div>
        <div class="item1"></div>
        <div class="item2"><span>60%</span></div>
      </div>

    </div>
  </section>

  <section class="portfolio">
    <div class="container">
      <h3 id="my_portfolio">MY PORTFOLIO</h3>
      <div class="portfolio-container">
        <div>
          <img src="" alt="Project">
          <p></p>
        </div>
        <div>
          <img src="" alt="Project">
          <p></p>
        </div>
        <div>
          <img src="" alt="Project">
          <p></p>
        </div>
        <div>
          <img src="" alt="Project">
          <p></p>
        </div>
        <div>
          <img src="" alt="Project">
          <p></p>
        </div>
        <div>
          <img src="" alt="Project">
          <p></p>
        </div>
      </div>
    </div>
  </section>

  <section class="about-me">
    <div class="container">
      <h3 id="my_about">ABOUT ME</h3>
      <div class="about-me-container">
        <img src="/img/me.jpg" alt="Lukas">
        <p>My name is Lukáš Mička. I'm a full-stack web developer
          and enjoy learning new trends. I'm developing user interfaces using JavaScript
          and React and at backend in PHP and Laravel.</p>
      </div>
    </div>
  </section>

  <footer>

    <section class="find-me">
      <div class="container">
        <h3>FIND ME HERE</h3>
        <div class="logos">
          <a href="https://github.com/LukasMicka" target="_blank"><img src="/img/GitHub-Mark/PNG/GitHub-Mark-64px.png" alt="GitHub"></a>
          <img src="/img/GlyphLogo_May2016_Onlinev2/glyph-logo_May2016_64x64.png" alt="Instagram">
        </div>
      </div>
    </section>

    <section class="contact-me">
      <div class="container">
        <h3 id="my_contact">CONTACT ME</h3>

        <form action="" method="post">

          <div class="name">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
          </div>

          <div class="email_tel">
            <input type="email" name="email" placeholder="Email">
            <input type="tel" name="phone" placeholder="Phone">
          </div>

          <textarea name="msg">
          </textarea>

          <input type="submit" name="submit" value="Send my message">

          <?= "<script type='text/javascript'>alert('$message');</script>"; ?>

        </form>
      </div>
    </section>

    <section class="greeting">
      <div class="container">
        <h3>NICE TO MEET YOU!</h3>
      </div>
    </section>

  </footer>

  <script src="index.js">
  </script>

</body>

</html>