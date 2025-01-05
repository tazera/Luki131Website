<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="/components/navbar/navbar.css" />

  <!-- Google Font: Montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
    rel="stylesheet"
  />
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top" id="main-navbar">
    <div class="container-fluid">
      <a class="navbar-brand logo-link" href="#">
        <img src="resources/logo2.png" alt="Logo" />
        Luki131
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-pop" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- JavaScript to auto-hide the navbar on scroll down, show on scroll up -->
  <script>
    const navbar = document.getElementById("main-navbar");
    let lastScrollTop = 0;

    window.addEventListener("scroll", function () {
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
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
