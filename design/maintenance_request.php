<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Request</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Maintenance Requests</h1>
            <form class="space-y-6" action="../php_imports/create_request.php" method="post">
                <div>
                    <label for="property_id" class="block text-sm font-medium text-gray-700">Property</label>
                    <select id="property_id" name="property_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option selected hidden disabled>Select one</option>
                        <!-- PHP loop to populate options -->
                        <!-- <option value="PROPERTY_ID">PROPERTY_ID</option> -->
                    </select>
                </div>
                
                <div>
                    <label for="issue" class="block text-sm font-medium text-gray-700">Issue</label>
                    <input id="issue" type="text" name="issue" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Describe the issue" required>
                </div>
                
                <!-- The tenant_id hidden input field would be here -->
                <!-- <input type="hidden" name="tenant_id" value="TENANT_ID"> -->
                
                <div class="flex justify-end mt-6">
                    <input type="submit" name="submit" value="Submit" class="px-6 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
    <!-- Include your PHP footer import here -->
</body>
</html>