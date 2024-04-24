<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging - YourAppName</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
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
    <div class="container mx-auto px-4 py-10">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Messaging</h2>
            <div id="messages" class="mb-4 p-4 bg-gray-50 rounded-lg h-64 overflow-auto">
                <!-- Messages will be loaded here -->
            </div>
            <div id="response" class="text-sm text-green-500 mb-2">
                <!-- Response message will be shown here -->
            </div>
            <form class="form" name="form">
                <textarea class="form_input w-full p-3 border border-gray-300 rounded-md resize-none mb-4" name="content" placeholder="Type your message here..." rows="4"></textarea>
                <input type="hidden" id="room_id" name="room_id" value="">
                <input type="hidden" name="account_id" value="">
                <button type="button" onclick="sendForm(this)" class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Send
                </button>
            </form>
        </div>
    </div>
    <!-- Include your scripts here -->
    <script type="text/javascript" src="../js_imports/script.js"></script>
    <script type="text/javascript" src="../js_imports/username.js"></script>
</body>
</html>
<!-- Include footer here -->