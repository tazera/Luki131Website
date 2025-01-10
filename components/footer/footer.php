<!-- filepath: /c:/Work/Projects/Luki131Website/components/footer/footer.php -->
<?php require_once('globals/bootstrapCSS.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="/components/footer/footer.css" />

<footer class="mt-auto bg-white text-black">
  <div class="container">
    <div class="row">
      <!-- Logo and Brand Text on the Left -->
      <div class="col-md-3 mb-4 footer-brand d-flex flex-column align-items-center align-items-md-start text-center text-md-start">
        <img src="resources/laki131_logo3.png" alt="Laki 131 Logo" class="footer-logo mb-3">
        <!-- Brand Text -->
        <div class="brand-text">
          <span class="brand-laki">Laki131</span>
          <!-- LinkedIn Icon -->
          <a href="https://www.linkedin.com/in/your-profile" target="_blank" class="linkedin-icon mt-2">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>

      <!-- Services Column -->
      <div class="col-md-3 mb-4">
        <h5 class="text-black">Services</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Die Casting</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Powder Coating</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Injection Molding</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">CNC Machining</a></li>
        </ul>
      </div>

      <!-- Industries Column -->
      <div class="col-md-3 mb-4">
        <h5 class="text-black">Industries</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Automotive Industry</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Electrical Industry</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Construction Industry</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Carpenter Industry</a></li>
        </ul>
      </div>

      <!-- Company Column -->
      <div class="col-md-3 mb-4">
        <h5 class="text-black">Company</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Sustainability</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Partners & Clients</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-black">Certificates</a></li>
        </ul>
      </div>
    </div>

    <hr class="mb-4 border-black">

    <div class="row">
      <div class="col-md-12 text-center">
        <p class="text-black">&copy; 2024 Laki131. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<?php require_once('globals/bootstrapJS.php'); ?>