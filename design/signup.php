<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropertyFinder - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.getElementById('togglePasswordIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

</head>
<body class="bg-gray-50 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-red-600 mb-6">PropertyFinder</h1>
        <form class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-semibold text-gray-700">Username:</label>
                <input type="text" id="username" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="firstName" class="block text-sm font-semibold text-gray-700">First Name:</label>
                <input type="text" id="firstName" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="lastName" class="block text-sm font-semibold text-gray-700">Last Name:</label>
                <input type="text" id="lastName" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Your Email:</label>
                <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password:</label>
                <div class="relative">
                    <input type="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 pr-10" required>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" onclick="togglePasswordVisibility()">
                        <i id="togglePasswordIcon" class="fas fa-eye-slash text-gray-500"></i>
                    </span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Account Type:</label>
                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
                    <option>Tenant</option>
                    <option>Landlord</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Create new account
                </button>
            </div>
            <div class="text-center text-sm">
                <p>Already have an account? <a href="login.php" class="text-blue-600 hover:underline">Login here</a></p>
            </div>
        </form>
    </div>
</body>
</html>

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