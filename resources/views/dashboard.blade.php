<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Codeflix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <nav class="bg-black p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-600">CODEFLIX</h1>
            <div class="flex items-center gap-4">
                <span class="text-sm">{{ auth()->user()->email }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm font-medium transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl">
            <h2 class="text-4xl font-bold mb-2">
                Selamat datang di Codeflix! 🎬
            </h2>
            <p class="text-gray-400 mb-8">Hi, {{ auth()->user()->name ?? 'User' }}</p>
            
            <div class="bg-gradient-to-r from-red-600 to-purple-600 p-8 rounded-lg mb-8">
                <h3 class="text-2xl font-bold mb-2">Ready to start watching?</h3>
                <p class="mb-4 text-gray-100">Choose your plan and enjoy unlimited streaming</p>
                <a href="{{ route('subscribe.plans') }}" 
                   class="inline-block bg-white text-red-600 font-bold px-6 py-3 rounded hover:bg-gray-100 transition">
                    View Plans →
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700">
                    <div class="text-3xl mb-3">📺</div>
                    <h3 class="text-xl font-semibold mb-2">Unlimited Content</h3>
                    <p class="text-gray-400">Access thousands of movies and TV shows</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700">
                    <div class="text-3xl mb-3">💎</div>
                    <h3 class="text-xl font-semibold mb-2">HD Quality</h3>
                    <p class="text-gray-400">Watch in stunning 4K resolution</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>