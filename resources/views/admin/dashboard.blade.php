<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Galaxy Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white p-5">
            <h1 class="text-2xl font-bold mb-5 text-center">Admin Galaxy Store</h1>
            <ul>
                <li class="mb-3"><a href="#" class="block p-3 rounded-lg hover:bg-gray-700 transition">🏠 Dashboard</a></li>
                <li class="mb-3"><a href="#" class="block p-3 rounded-lg hover:bg-gray-700 transition">📦 Produk</a></li>
                <li class="mb-3"><a href="#" class="block p-3 rounded-lg hover:bg-gray-700 transition">🛒 Pesanan</a></li>
                <li class="mb-3"><a href="#" class="block p-3 rounded-lg hover:bg-gray-700 transition">👥 Pelanggan</a></li>
                <li class="mb-3"><a href="#" class="block p-3 rounded-lg hover:bg-gray-700 transition">⚙️ Pengaturan</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h2 class="text-3xl font-semibold mb-4 text-gray-800">Dashboard</h2>
            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-blue-500">
                    <h3 class="text-xl font-semibold text-gray-800">Total Produk</h3>
                    <p class="text-2xl text-blue-500 font-bold">150</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-green-500">
                    <h3 class="text-xl font-semibold text-gray-800">Total Pesanan</h3>
                    <p class="text-2xl text-green-500 font-bold">75</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-yellow-500">
                    <h3 class="text-xl font-semibold text-gray-800">Total Pelanggan</h3>
                    <p class="text-2xl text-yellow-500 font-bold">200</p>
                </div>
            </div>

            <!-- Recent Orders Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Pesanan Terbaru</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 text-left">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-3 px-4 border-b">ID Pesanan</th>
                                <th class="py-3 px-4 border-b">Pelanggan</th>
                                <th class="py-3 px-4 border-b">Total</th>
                                <th class="py-3 px-4 border-b">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100 transition">
                                <td class="py-3 px-4 border-b">#001</td>
                                <td class="py-3 px-4 border-b">John Doe</td>
                                <td class="py-3 px-4 border-b">Rp 100.000</td>
                                <td class="py-3 px-4 border-b text-green-600 font-semibold">Dikirim</td>
                            </tr>
                            <tr class="hover:bg-gray-100 transition">
                                <td class="py-3 px-4 border-b">#002</td>
                                <td class="py-3 px-4 border-b">Jane Smith</td>
                                <td class="py-3 px-4 border-b">Rp 250.000</td>
                                <td class="py-3 px-4 border-b text-yellow-600 font-semibold">Menunggu Pembayaran</td>
                            </tr>
                            <tr class="hover:bg-gray-100 transition">
                                <td class="py-3 px-4 border-b">#003</td>
                                <td class="py-3 px-4 border-b">Alice Johnson</td>
                                <td class="py-3 px-4 border-b">Rp 150.000</td>
                                <td class="py-3 px-4 border-b text-green-600 font-semibold">Dikirim</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
