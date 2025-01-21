<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotating Certificates</title>

    

    <!-- Custom CSS -->
    <style>
        .certificates-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            overflow: hidden; /* Prevent scrollbars */
        }

        .rotating-cards-wrapper {
            display: flex;
            gap: 20px;
            animation: scroll-cards 20s linear infinite; /* Smooth looping animation */
        }

        .rotating-card {
            flex: 0 0 200px; /* Card width */
            height: 300px; /* Card height */
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .rotating-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Animation for smooth horizontal scrolling */
        @keyframes scroll-cards {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Duplicating row for infinite scrolling effect */
        .rotating-cards-container {
            display: flex;
            width: calc(200px * 10 + 200px * 9); /* Adjust width for all cards and gaps */
        }
    </style>
</head>

<body>

    <!-- Certificates Section -->
    <section class="certificates-section">
        <div class="container">
            <h2 class="text-center mb-4">Online Coding Certifications</h2>
            <div class="rotating-cards-container">
                <div class="rotating-cards-wrapper">
                    <!-- Original Set of Cards -->
                    <div class="rotating-card">
                        <img src="resources/cert1.jpg" alt="Certificate 1">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert2.jpg" alt="Certificate 2">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert3.jpg" alt="Certificate 3">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert1.jpg" alt="Certificate 4">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert2.jpg" alt="Certificate 5">
                    </div>
                    <!-- Duplicated Set of Cards -->
                    <div class="rotating-card">
                        <img src="resources/cert1.jpg" alt="Certificate 1">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert2.jpg" alt="Certificate 2">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert3.jpg" alt="Certificate 3">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert4.jpg" alt="Certificate 4">
                    </div>
                    <div class="rotating-card">
                        <img src="resources/cert5.jpg" alt="Certificate 5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    

</body>

</html>
