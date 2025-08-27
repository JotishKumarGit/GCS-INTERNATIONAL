<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cashews</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Fade-in animation */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeInUp 1s ease forwards;
            opacity: 0;
        }

        /* Delay for staggered animation */
        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        /* Section styling */
        .image-content-section {
            background: #f8f9fa;
            padding: 60px 0;
            border-radius: 10px;
        }

        .content-box {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-enquiry {
            padding: 10px 25px;
            font-size: 16px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-enquiry:hover {
            transform: scale(1.05);
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <!-- Header  -->
    <?php include('header.php') ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Cashews</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Cashews</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Products details -->
    <section class="image-content-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Image -->
                <div class="col-md-6 mb-4 mb-md-0 fade-in delay-1">
                    <img src="img/Cashews.webp" alt="Cashew Nuts" height="auto" width="100%" class="img-fluid rounded">
                </div>

                <!-- Right: Content -->
                <div class="col-md-6 fade-in delay-2">
                    <div class="content-box">
                        <h2 class="mb-3">Premium Quality Cashew Nuts</h2>
                        <p class="mb-4">
                            Our cashews are carefully sourced, processed, and graded to deliver exceptional taste,
                            texture, and crunch.
                            Rich in protein, healthy fats, and essential minerals, these cashew nuts are perfect for
                            snacking, cooking,
                            confectionery, and export purposes.
                        </p>
                        <ul class="mb-4">
                            <li>Available in W180, W210, W240, W320, and broken grades</li>
                            <li>Crisp texture with a naturally sweet and buttery flavor</li>
                            <li>Roasted, salted, and plain variants available</li>
                            <li>Rich in magnesium, iron, and heart-healthy fats</li>
                            <li>Vacuum packed and bulk packing options for extended shelf life</li>
                        </ul>
                        <a href="#enquiry-form" class="btn btn-primary btn-enquiry" data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">Enquiry Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Products details End -->

    <!-- Footer  -->
    <?php include('footer.php') ?>