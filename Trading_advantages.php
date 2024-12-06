<?php
include_once('header.php');
?>

<head>
<style>
    /* General body styling */
   /* body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: ;
        color: white;
    }
*/

    @media (max-width: 767px) {
    .custom-box {
        flex-direction: column; /* Stack items vertically */
        padding: 20px; /* Reduce padding for mobile */
        width: 100%; /* Ensure full width */
    }

    .row.g-4 {
        display: flex;
        flex-direction: column; /* Stack rows on mobile */
    }

    .col-12 {
        margin-bottom: 20px; /* Add spacing between the boxes */
    }

    .full-width-image {
        width: 100%; /* Ensure the image fits screen width */
        margin-left: 0; /* Remove negative margins */
        margin-top: 0; /* Adjust top margin */
    }
}

    .custom-box {
        color: white;
        padding: 40px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
               min-height: 235px;
    }

    .green-box {
        background-color: #28a745;
    }

    .blue-box {
        background-color: #007bff;
    }

    .light-blue-box {
        background-color: gray;
        color: #007bff;
    }

    .cyan-box {
        background-color: #17a2b8;
    }

    .full-width-image {
        width: 100%; /* Ensure image fits the screen width */
        max-width: 1720px;
        margin-left: -294px;;;
    }

    /* Mobile responsiveness (max width 767px) */
    @media (max-width: 767px) {
        .custom-box {
            flex-direction: column; /* Stack vertically on mobile */
            padding: 20px; /* Reduce padding */
        }

        .full-width-image {
            width: 100%; /* Ensure image fits screen width */
            margin-left: 0; /* Remove negative margin for mobile */
            margin-top: 0; /* Adjust top margin */
        }

        .main-container {
            width: 100%; /* Full width for mobile */
            max-width: 100%; /* Remove max-width constraint */
            padding: 15px; /* Add some padding */
        }

        h1, h2, p {
            font-size: 1rem; /* Adjust font size for smaller screens */
        }

        .btn-custom {
            padding: 8px 16px; /* Adjust button size for mobile */
            font-size: 0.9rem; /* Adjust button text size */
        }
    }

    /* Desktop layout adjustments (min-width 768px) */
    @media (min-width: 768px) {
        .full-width-image {
            width: 300%; /* Larger width for desktop */
            margin-left: -201px; /* Shift image left for larger screens */
        }

        .main-container {
            max-width: 494px; /* Maintain max-width for desktops */
        }

        .custom-box {
            padding: 40px; /* Keep larger padding on desktop */
        }
        .custom-box {
    border-radius: 5px;
    color: white;
    min-height: 216px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.green-box {
    background-color: #28a745; /* Green */
}

.light-blue-box {
   background-color: #dee2e6; /* Light Blue */
    color: #007bff;
}

.blue-box {
    background-color: #3f8cde; /* Blue */
}

.cyan-box {
    background-color: #17a2b8; /* Cyan */
}

    }
</style>
</head>

<body>

 <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: bottom; height: 30ch;">
    <div class="container pt-5">
        <div class="pt-5"></div>
        <h1 class="fs-2 text-white pt-5 mt-3">Trading Advantages</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Trading Advantages</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <!-- First Box -->
        <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-box green-box text-center p-4" style="color: #fff;">
                <p>Get 2x more profit with</p>
                <h2 style="color: #f8f9fa;">Lowest spreads<br>In the industry</h2>
            </div>
        </div>
        <!-- Second Box -->
        <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-box light-blue-box text-center p-4">
                <p style=" color: #50b8da;">Open orders whenever you want and</p>
                <h2 style=" color: #50b8da;">Don't pay swaps</h2>
                <p><a href="#" class="text-decoration-none" style="    color: #50b8da;">Learn how we make it happen</a></p>
            </div>
        </div>
        <!-- Third Box -->
        <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-box blue-box text-center p-4">
                <p>Increase your trading confidence with</p>
                <h2 style="color: #f8f9fa;">Negative balance protection</h2>
            </div>
        </div>
        <!-- Fourth Box -->
        <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-box cyan-box text-center p-4">
                <p>Buy and sell for the price you see with</p>
                <h2 style="color: #f8f9fa;">Fast order execution</h2>
                <p><a href="#" class="text-decoration-none text-white">Learn how it works</a></p>
            </div>
        </div>

    </div>
</div>
 <div class="tutorials__button" style="text-align: center;">
            <a class="btn-t48 tutorials__btn-link" style="padding: 0 52px;  color: #ff561c;font-size: 20px;" href="learn more.php" target="_blank">MT5</a>
        </div>
<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="assets/images/gallery/image.png" class="full-width-image" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container-fluid main-container">
    <div class="row">
        <div class="col-12 text-center" style="background-color: orange;height:351px;">
            <h1>Pemaxx MT5</h1>
            <h2>MetaTrader 5</h2>
            <p>UP TO 500 LOTS PER ORDER</p>
            <p>300+ INSTRUMENTS</p>
            <a href="https://crm.pemaxx.com/register" class="btn btn-custom">OPEN MT5 ACCOUNT</a>
        </div>
    </div>
</div><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<?php include_once('footer.php'); ?>
