<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Ticket Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* A vibrant gradient background simulating concert lights */
            background: linear-gradient(135deg, #111827 0%, #312e81 50%, #4c1d95 100%);
            min-height: 100vh;
        }
        .glass-panel {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="flex items-center justify-center p-4 sm:p-8">

    <div class="glass-panel w-full max-w-lg rounded-2xl shadow-2xl p-8 sm:p-10 relative overflow-hidden">
        <!-- Decorative Glow -->
        <div class="absolute -top-20 -right-20 w-40 h-40 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>

        <div class="relative z-10">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white mb-2 tracking-tight">Neon Nights Tour</h1>
                <p class="text-gray-300 text-sm">Register to secure your tickets now.</p>
            </div>

            <form action="#" method="POST" class="space-y-5" onsubmit="event.preventDefault();">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-200 mb-1">Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="Jane Doe"
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-200 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="jane@example.com"
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                </div>

                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-200 mb-1">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required placeholder="+1 (555) 000-0000"
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <!-- Ticket Type -->
                    <div>
                        <label for="ticket-type" class="block text-sm font-medium text-gray-200 mb-1">Ticket Type</label>
                        <select id="ticket-type" name="ticket-type" required
                            class="w-full px-4 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected>Select type</option>
                            <option value="ga" class="bg-gray-800">General Admission - $75</option>
                            <option value="vip" class="bg-gray-800">VIP Experience - $150</option>
                            <option value="meet-greet" class="bg-gray-800">Meet & Greet - $250</option>
                        </select>
                    </div>

                    <!-- Quantity -->
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-200 mb-1">Quantity</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="10" required value="1"
                            class="w-full px-4 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-purple-500">
                        Register Now
                    </button>
                </div>
                
                <p class="text-center text-xs text-gray-400 mt-4">
                    By registering, you agree to our Terms of Service and Privacy Policy.
                </p>
            </form>
        </div>
    </div>

</body>
</html>