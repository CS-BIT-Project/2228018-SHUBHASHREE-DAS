<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMARTPrep</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
</head>

<body>
  <!-- Header starts here -->
  <header class="header">
    <nav class="main__navbar">
      <h1 id="logo">SMARTPrep</h1>
      <div class="openMenu"><i class="fa fa-bars"></i></div>

      <ul class="mainMenu">
        <li><a href="#">Home</a></li>
        <li><a href="neet_mock_test/mocks.html">Mock Test</a></li>
        <li><a href="#grid-section">Question Paper</a></li>
        <li><a href="feedback.php">Give Feedback</a></li>

        <!-- 👇 LOGIN/LOGOUT Buttons based on Session -->
        <?php if (isset($_SESSION['username'])): ?>
          <li class="profile-dropdown">
        <div class="profile-dropdown-content">
              <span style="padding: 10px 20px; font-weight: 600;">👋 Hi, <?= htmlspecialchars($_SESSION['username']) ?></span>
              <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
          </li>
        <?php else: ?>
          <div style="display: flex; gap: 10px;">
            <a href="login.php" style="padding: 8px 18px; border-radius: 25px; background: #1a1a2e; color: #fff; text-decoration: none; font-weight: 600;"
              onmouseover="this.style.background='#29b6f6'; this.style.color='#000';"
              onmouseout="this.style.background='#1a1a2e'; this.style.color='#fff';">
              <i class="fas fa-sign-in-alt"></i> Login
            </a>
            <a href="signup.php" style="padding: 8px 18px; border-radius: 25px; background: #29b6f6; color: #000; text-decoration: none; font-weight: 600;"
              onmouseover="this.style.background='#12005b'; this.style.color='#fff';"
              onmouseout="this.style.background='#29b6f6'; this.style.color='#000';">
              <i class="fas fa-user-plus"></i> Sign Up
            </a>
          </div>
        <?php endif; ?>
        <!-- END -->

        <div class="closeMenu"><i class="fa fa-times"></i></div>
        <span class="icons">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-github"></i>
        </span>
      </ul>
    </nav>

    <section>
      <div class="hero">
        <img src="images/homep.jpg" alt="photo" style="object-fit: cover" />
        <h1 class="headline">All resources,<br> In One place.</h1>
      </div>
    </section>
  </header>

  <div class="slider"></div>

  <!-- Grid section -->
  <div id="grid-section" class="container" style="text-align: center; margin-bottom: 50px;">
    <div style="height: 70px;"></div>
    <div class="container" style="text-align: center; margin-bottom: 50px;">
      <h1>Select Year</h1>
      <h5>Practice previous year papers and ace your preparations</h5>
    </div>

    <ul class="honeycomb" lang="es">
      <li class="honeycomb-cell" onclick="location.href ='year/2024.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2024</p></li>
      <li class="honeycomb-cell" onclick="location.href ='year/2023.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2023</p></li>
      <li class="honeycomb-cell" onclick="location.href ='year/2022.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2022</p></li>
      <li class="honeycomb-cell" onclick="location.href ='year/2021.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2021</p></li>
      <li class="honeycomb-cell" onclick="location.href ='year/2020.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2020</p></li>
      <li class="honeycomb-cell" onclick="location.href ='year/2019.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2019</p></li>
      <li class="honeycomb-cell" onclick="location.href ='year/2018.html'"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2018</p></li>
      <li class="honeycomb-cell honeycomb__placeholder"></li>
      <li class="honeycomb-cell"><img class="honeycomb-cell__image" src="images/gridblack.jpg" /><p class="bttn">Year-2017</p></li>
      <li class="honeycomb-cell honeycomb__placeholder"></li>
    </ul>
    <div style="height: 100px"></div>
  </div>

  <!-- Footer section -->
  <footer>
    <div class="footer-container">
      <div class="footer-text">
        <p class="footer-heading">📚 Learn. Practice. Succeed.</p>
        <p class="footer-subtext">Access previous year papers & mock tests anytime.</p>
      </div>

      <div class="footer-icons">
        <a href="#" class="icon github"><i class="fab fa-github"></i></a>
        <a href="#" class="icon facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
      </div>

      <div class="footer-copyright">
        <p>© 2025 SMARTPrep. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- JS Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <script src="main.js"></script>

</body>
</html>