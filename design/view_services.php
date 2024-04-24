<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Landlord's Registered Properties:</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full table-auto">
                <thead class="bg-gray-100">
                    <tr class="text-left text-gray-600">
                        <th class="px-6 py-3 font-bold uppercase">Service ID</th>
                        <th class="px-6 py-3 font-bold uppercase">Landlord ID</th>
                        <th class="px-6 py-3 font-bold uppercase">Address ID</th>
                        <th class="px-6 py-3 font-bold uppercase">Title</th>
                        <th class="px-6 py-3 font-bold uppercase">Square Footage</th>
                        <th class="px-6 py-3 font-bold uppercase">Bedrooms</th>
                        <th class="px-6 py-3 font-bold uppercase">Deposit</th>
                        <th class="px-6 py-3 font-bold uppercase">Description</th>
                        <th class="px-6 py-3 font-bold uppercase">Verified</th>
                        <th class="px-6 py-3 font-bold uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <!-- Repeat this table row for each Service item -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4">001</td>
                        <td class="px-6 py-4">L001</td>
                        <td class="px-6 py-4">A001</td>
                        <td class="px-6 py-4">Charming Studio</td>
                        <td class="px-6 py-4">500</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">£500</td>
                        <td class="px-6 py-4">A lovely studio with modern amenities.</td>
                        <td class="px-6 py-4">Verified</td>
                        <td class="px-6 py-4 flex items-center space-x-2">
                            <button class="text-green-500 hover:text-green-600 transition duration-300">
                                <i class="fas fa-check" title="Approve"></i>
                            </button>
                            <button class="text-red-500 hover:text-red-600 transition duration-300">
                                <i class="fas fa-times" title="Decline"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- End of repeated table row -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Developer Note: Implement functionality to send an automatic email notification when "Approve" or "Decline" actions are taken. -->

    <!-- Footer -->
    <footer class="bg-white mt-8">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-600">
            <p>&copy; 2024 Property Listings. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>