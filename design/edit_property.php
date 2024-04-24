<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
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
    <div class="container mx-auto p-8">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Property</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Stunning Urban Apartment" value="Current Property Title">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Detailed description of the property">Current property description...</textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Price in GBP" value="123456">
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" id="location" name="location" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="City, Country" value="Current Location">
                </div>
                <div class="mb-4">
                    <label for="photos" class="block text-sm font-medium text-gray-700">Photos</label>
                    <input type="file" id="photos" name="photos" multiple class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <span class="text-xs text-gray-500 mt-1 block">Upload new photos to replace the existing ones.</span>
                </div>
                <div class="flex justify-between mt-6">
                    <button type="button" class="px-6 py-2 leading-5 text-gray-700 transition-colors duration-200 transform border border-gray-300 rounded-md hover:bg-gray-100 focus:outline-none">Cancel</button>
                    <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Update Property</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>