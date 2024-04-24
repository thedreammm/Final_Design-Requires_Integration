<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
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

<body class="bg-gray-100 font-inter">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Maintenance Requests</h1>
        <div class="overflow-x-auto bg-white shadow-md rounded my-6">
            <table class="min-w-full border-collapse text-left">
                <!-- Table Header -->
                <thead>
                    <tr class="border-b-2 border-gray-300">
                        <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-600">Maintenance ID</th>
                        <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-600">Property ID</th>
                        <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-600">Tenant ID</th>
                        <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-600">Issue</th>
                        <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-600">Date Made</th>
                        <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-600">Actions</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    <!-- Repeat this table row for each maintenance request item -->
                    <tr class="hover:bg-gray-100">
                        <td class="py-4 px-6 border-b border-gray-200">001</td>
                        <td class="py-4 px-6 border-b border-gray-200">A123</td>
                        <td class="py-4 px-6 border-b border-gray-200">T001</td>
                        <td class="py-4 px-6 border-b border-gray-200">Leaking Roof</td>
                        <td class="py-4 px-6 border-b border-gray-200">2023-01-01</td>
                        <td class="py-4 px-6 border-b border-gray-200 flex items-center justify-start space-x-4">
                            <button class="text-yellow-500 hover:text-yellow-600 transition duration-300">
                                <i class="fas fa-hourglass-half" title="Work in Progress"></i>
                            </button>
                            <button class="text-green-500 hover:text-green-600 transition duration-300">
                                <i class="fas fa-check" title="Solved"></i>
                            </button>
                            <button class="text-red-500 hover:text-red-600 transition duration-300">
                                <i class="fas fa-trash" title="Delete"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- End of repeated table row -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Developer Note: Implement dynamic functionality to send email notifications when "Work in Progress" or "Solved" is selected. On "Solved", also trigger the deletion of the request. -->
</body>

</html>