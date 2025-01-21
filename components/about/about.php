<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .hero-section {
            background: url('https://www.esskaymachines.com/blog/wp-content/uploads/2020/12/industrial-machinery-imhe-384x288_tcm27-3207.jpg') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.2rem;
            max-width: 600px;
        }

        .mission-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .mission-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .team-section {
            padding: 50px 0;
        }

        .team-member {
            text-align: center;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h5 {
            font-weight: bold;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1>About Our Company</h1>
            <p>
                At Strypes, we are dedicated to delivering software excellence. Discover how our innovative solutions
                drive your business forward.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="container text-center">
            <h2>Our Mission</h2>
            <p class="lead">
                We aim to empower businesses with innovative, scalable, and secure software solutions. 
                By leveraging cutting-edge technology and industry expertise, we bring your visions to life.
            </p>
        </div>
    </section>

    <!-- Workflow/Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="text-center mb-5">Meet Our Team</h2>
            <div class="row g-4">
                <div class="col-md-4 team-member">
                    <img src="resources/team-member1.jpg" alt="Team Member" class="img-fluid">
                    <h5>John Doe</h5>
                    <p>Chief Executive Officer</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="resources/team-member2.jpg" alt="Team Member" class="img-fluid">
                    <h5>Jane Smith</h5>
                    <p>Lead Software Engineer</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="resources/team-member3.jpg" alt="Team Member" class="img-fluid">
                    <h5>Robert Brown</h5>
                    <p>Product Manager</p>
                </div>
            </div>
        </div>
    </section>

    <?php require('../divider/divider.php'); ?>

    <?php require_once('../contact/contact.php'); ?>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
