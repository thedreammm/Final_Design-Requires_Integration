<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Leases</title>
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
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Uploaded Leases</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Document ID</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Document Name</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP loop to populate table rows -->
                        <!-- Example row -->
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">1</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Lease Agreement.pdf</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800">Download Document</a>
                            </td>
                        </tr>
                        <!-- Repeat rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Include your PHP footer import here -->
</body>
</html>