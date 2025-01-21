<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php require_once('../../globals/bootstrapCSS.php'); ?>
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .contact-section {
            padding: 50px 0;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-submit {
            background-color: #fd7e14;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-submit:hover {
            background-color: #e96a00;
        }

        .contact-info {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info h4 {
            color: #fd7e14;
        }
    </style>
</head>

<body>
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Contact Form (Left) -->
                <div class="col-md-7">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <h2 class="fw-bold mb-4">Contact Us</h2>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                            </div>

                            <!-- Placeholder for reCAPTCHA -->
                            <div class="mb-3">
                                <div class="bg-light p-3 text-center rounded" style="border: 1px solid #ccc;">
                                    <small>reCAPTCHA will be here</small>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-submit w-100">Send Message</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info (Right) -->
                <div class="col-md-5">
                    <div class="contact-info">
                        <h4>Our Office</h4>
                        <p>123 Business Street, Sofia, Bulgaria</p>

                        <h4>Email</h4>
                        <p>contact@company.com</p>

                        <h4>Phone</h4>
                        <p>+359 888 123 456</p>

                        <h4>Working Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
