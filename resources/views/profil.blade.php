<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - Galaxy Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#DBE2EF] font-sans antialiased">

    <!-- 🔹 Layout utama dengan sidebar -->
    <div class="flex min-h-screen">

        <!-- 🔹 Sidebar -->
        <div class="w-64 bg-[#DBE2EF] text-gray-800 shadow-lg p-5">
            <h2 class="text-2xl font-bold mb-6 tracking-wide">🌌 Galaxy Store</h2>
            <ul class="space-y-5">
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>🏠</span> <span>Dashboard</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>💳</span> <span>Pembayaran</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>📦</span> <span>Produk</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>🎨</span> <span>Dekorasi</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>⚙️</span> <span>Pengaturan</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>📊</span> <span>Penjualan</span>
                </li>
                <li class="flex items-center gap-3 text-red-500 hover:text-red-400 transition-all cursor-pointer">
                    <span>🚪</span> <span>Logout</span>
                </li>
            </ul>
        </div>

        <!-- 🔹 Container utama dengan warna putih -->
        <div class="flex-1 max-w-5xl mx-auto mt-10 bg-white shadow-xl rounded-2xl overflow-hidden p-6">

            <!-- 🔹 Header -->
            <div class="bg-[#DBE2EF] p-5 flex justify-between items-center rounded-lg shadow-md border border-gray-500">
                <h1 class="text-3xl font-extrabold tracking-wide text-gray-800">GALAXY STORE</h1>
                <div class="flex items-center gap-3">
                    <input type="text" placeholder="🔍 Pencarian Produk"
                        class="px-4 py-2 w-72 rounded-full bg-white text-gray-700 border border-gray-300 focus:ring-2 focus:ring-gray-400 focus:outline-none transition-all duration-300 shadow-sm">
                    <span class="text-lg font-semibold text-gray-700">Galaxy Store</span>
                    <div class="w-12 h-12 bg-gray-400 rounded-full border-2 border-gray-500 overflow-hidden shadow-md">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Avatar">
                    </div>
                </div>
            </div>

            <!-- 🔹 Profil dengan background putih -->
            <div class="p-6 flex items-center gap-6 bg-white border border-gray-300 rounded-lg shadow-md">
                <img class="w-40 h-40 rounded-lg border-4 border-gray-500 shadow-lg transition-transform transform hover:scale-105"
                    src="{{ $profile['image'] }}" alt="Foto Profil">
                <div class="flex-1">
                    <h1 class="text-3xl font-bold text-gray-800">{{ $profile['name'] }}</h1>
                    <div class="border-t border-gray-400 mt-2 pt-2">
                        <p class="text-gray-700"><strong>Username:</strong> {{ $profile['username'] }}</p>
                        <p class="text-gray-700"><strong>Email:</strong> {{ $profile['email'] }}</p>
                        <p class="text-gray-700"><strong>Kontak:</strong> {{ $profile['contact'] }}</p>
                        <p class="text-gray-700"><strong>Alamat:</strong> {{ $profile['address'] }}</p>
                        <p class="text-gray-700"><strong>Jenis Kelamin:</strong> {{ $profile['gender'] }}</p>
                    </div>
                </div>
            </div>

            <!-- 🔹 Biodata dengan background putih -->
            <div class="p-6 bg-white border border-gray-300 rounded-b-2xl">
                <h2 class="text-xl font-semibold text-gray-800">Biodata</h2>
                <p class="text-gray-700 mt-2">{{ $profile['bio'] }}</p>
            </div>

            <!-- 🔹 Footer -->
            <div class="bg-[#DBE2EF] text-gray-800 p-6 flex justify-between text-sm rounded-lg shadow-md mt-6 border border-gray-500">
                <div class="space-y-2">
                    <h2 class="font-semibold text-lg">📍 Alamat</h2>
                    <p class="text-gray-700">Galaxy Store, Srono</p>
                </div>
                <div class="space-y-2">
                    <h2 class="font-semibold text-lg">📢 Ikuti Kami</h2>
                    <a href="#" class="text-blue-500 hover:text-blue-400 transition-all">Instagram</a>
                    <a href="#" class="text-orange-500 hover:text-orange-400 transition-all">Shopee</a>
                </div>
                <div class="space-y-2">
                    <h2 class="font-semibold text-lg">📞 Kontak Kami</h2>
                    <p class="text-gray-700">0812-3456-7890</p>
                    <p class="text-gray-700">0812-9876-5432</p>
                </div>
            </div>

            <!-- 🔹 Copyright -->
            <div class="bg-[#DBE2EF] text-gray-700 text-center py-3 text-xs rounded-b-lg shadow-md border border-gray-500">
                © 2025 Galaxy Store - All Rights Reserved.
            </div>

        </div>
    </div>

</body>
</html>
