<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- Bootstrap CSS -->
  <?php include './globals/bootstrapCSS.php'; ?>
  <link rel="stylesheet" href="/components/navbar/navbar.css" />

  <!-- Google Font: Montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
    rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top" id="main-navbar">
    <div class="container-fluid">
      <a class="navbar-brand logo-link" href="index.php">
        <img src="resources/logo2.png" alt="Logo" />
        Laki131
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Powder Coating</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Machines and Tools</a></li>
              <li><a class="dropdown-item" href="#">Dye Casting</a></li>
              <li><a class="dropdown-item" href="#">Power Coating</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="dropdown-icon-container">
                <img src="./resources/favicon-32x32.png" alt="Language Icon" class="dropdown-icon">
                <span class="dropdown-arrow"></span>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
              <li><a class="dropdown-item" href="#">English</a></li>
              <li><a class="dropdown-item" href="#">Spanish</a></li>
              <li><a class="dropdown-item" href="#">French</a></li>
              <!-- Add more languages as needed -->
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-pop contact-link" href="#">Contact Us</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- JavaScript to auto-hide the navbar on scroll down, show on scroll up -->
  <script>
    const navbar = document.getElementById("main-navbar");
    let lastScrollTop = 0;

    window.addEventListener("scroll", function() {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

      // 1) Hide on scroll down, show on scroll up
      if (currentScroll > lastScrollTop) {
        // Scrolling down
        navbar.classList.add("nav-hide");
      } else {
        // Scrolling up
        navbar.classList.remove("nav-hide");
      }
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;

      // 2) Make the navbar semi-transparent after scrolling 50px
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  </script>

  <!-- Bootstrap JS -->
  <?php include './globals/bootstrapJS.php'; ?>
</body>

</html>