<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <header>
    <div>
        <a>
            <h1>LTS</h1>
        </a>
        <nav>
            <ul>
                <li><a href="index.php">Splash page</a></li>
                <li><a href="signup.php">signup</a></li>
                <li><a href="home.php">home</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="clear.php">Clear Session</a></li>
                <li><a href="add_property.php">Add Property</a></li>
                <li><a href="edit_property.php">Edit Property</a></li>
                <li><a href="add_service.php">Add Service</a></li>
                <li><a href="messages.php">Message other users</a></li>
                <li><a href="view_accounts.php">View accounts</a></li>
                <li><a href="maintenance_request.php">Maintenance Request</a></li>
                <li><a href="view_all_docs.php">View all documents</a></li>
                <li><a href="view_leases.php">View leases</a></li>
                <li><a href="view_m_request.php">View Maintenance Request</a></li>
                <li><a href="view_properties.php">View properties</a></li>
                <li><a href="view_services.php">View added services</a></li>
                <li><a href="verifyemail.php">Verify your email</a></li>
                <li><a href="resetpassword.php">Reset your password</a></li>
                <li><a href="upload_documents.php">Upload documents</a></li>
                <li><a href="view_applications.php">View Applications</a></li>
                <li><a href="add_rentpayment.php">Add Rent payments</a></li>
                <li><a href="view_rentpayment.php">View Rent payment</a></li>
            </ul>
        </nav>
    </div>
</header>
</head>
<body class="bg-gray-100">

    <!-- Property Header -->
    <div class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Charming Garden Studio in Sunny Bernal Heights
            </h1>
        </div>
    </div>

    <!-- Image Gallery with Slideshow -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">
        <div class="flex justify-center">
            <div class="relative w-full">
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="https://placehold.co/600x400" style="width:100%" alt="Main image of the property showing a well-lit room with modern decor">
                    </div>
                    <div class="mySlides fade">
                        <img src="https://placehold.co/600x400" style="width:100%" alt="Image of the property kitchen area">
                    </div>
                    <div class="mySlides fade">
                        <img src="https://placehold.co/600x400" style="width:100%" alt="Image of the property bathroom">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Property Details -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-gray-800">About this space</h2>
                <p class="text-gray-600 mt-2">
                    Enjoy a stylish experience at this centrally-located place. This studio is perfect for a couple's getaway or a solo traveler's retreat. It features a cozy living area, a queen-size bed, and a beautiful garden.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Amenities</h3>
                    <ul class="list-disc pl-5 text-gray-600">
                        <li>Wi-Fi</li>
                        <li>Essentials (towels, bed sheets, soap, toilet paper, pillows)</li>
                        <li>TV</li>
                        <li>Kitchen</li>
                        <li>Free parking on premises</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Sleeping arrangements</h3>
                    <ul class="list-disc pl-5 text-gray-600">
                        <li>1 queen bed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">
        <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">£250/month</h2>
                <p class="text-gray-600">Free cancellation for 48 hours</p>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Apply for Leasing
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-600">
            <p>&copy; 2024 Property Listings. All rights reserved.</p>
        </div>
    </footer>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>

</body>
</html>
