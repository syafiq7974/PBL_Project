<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-blue-50">
    <div class="max-w-6xl mx-auto p-6">
        <!-- Header -->
        <header class="flex justify-between items-center bg-white shadow-md p-4 rounded-lg border border-blue-300">
            <h1 class="text-xl font-bold text-blue-700">🌌 GALAXY STORE</h1>
            <input type="text" placeholder="🔍 Cari produk..." class="px-4 py-2 border border-blue-300 rounded-lg w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <div class="text-blue-700 font-semibold">🔑 <a href="#" class="hover:underline">Login</a> | <a href="#" class="hover:underline">Daftar</a></div>
        </header>

        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-blue-200 to-blue-400 p-8 mt-6 rounded-lg flex items-center justify-between shadow-lg">
            <div class="w-1/2 text-white">
                <h2 class="text-3xl font-bold">Lebih produktif dengan produk terbaik!</h2>
                <p class="mt-2">Temukan perangkat dan alat terbaik untuk mendukung pekerjaan dan hobi Anda.</p>
                <button class="mt-4 px-5 py-2 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition">Daftar Sekarang</button>
            </div>
            <img src="https://via.placeholder.com/200" alt="Product Image" class="w-1/4 rounded-lg shadow-md">
        </section>

        <!-- Produk List -->
        <section class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @foreach ($produk as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition transform hover:scale-105 border border-blue-200">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="w-full h-24 object-cover">
                    <div class="p-3 text-center">
                        <h3 class="text-xs font-semibold text-blue-700">{{ $item['name'] }}</h3>

                        <!-- ⭐ Menampilkan Rating Produk -->
                        <div class="flex justify-center items-center text-yellow-500 mt-1">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= floor($item['rating']))
                                    <i class="fas fa-star"></i> <!-- Bintang penuh -->
                                @elseif ($i - 0.5 == $item['rating'])
                                    <i class="fas fa-star-half-alt"></i> <!-- Bintang setengah -->
                                @else
                                    <i class="far fa-star"></i> <!-- Bintang kosong -->
                                @endif
                            @endfor
                        </div>

                        <p class="text-gray-600 text-xs">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </section>

        <!-- Testimoni -->
        <section class="bg-white p-6 rounded-lg shadow-md mt-8 border border-blue-300">
            <h2 class="text-xl font-semibold text-blue-700 mb-4">⭐ Testimoni Pelanggan</h2>
            <div class="flex items-center space-x-3">
                <img src="https://i.pravatar.cc/80" alt="User Avatar" class="w-14 h-14 rounded-full border-4 border-blue-500 shadow-md">
                <div>
                    <p class="italic text-gray-700">"Barang berkualitas tinggi, sangat membantu pekerjaan saya!"</p>
                    <p class="font-semibold text-blue-700">— Mega Sulistiyani</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-blue-100 py-6 mt-10">
            <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-blue-700">
                <!-- Alamat -->
                <div>
                    <h3 class="font-bold">🏠 Alamat</h3>
                    <p class="text-sm mt-2">
                        Jl. Srono - Muncar No.4444, Kebaman, <br>
                        Kec. Srono, Kabupaten Banyuwangi, <br>
                        Jawa Timur 68471
                    </p>
                </div>

                <!-- Ikuti Kami -->
                <div>
                    <h3 class="font-bold">📢 Ikuti Kami</h3>
                    <p class="text-sm mt-2">Instagram</p>
                    <p class="text-sm">Shopee</p>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="font-bold">📞 Kontak Kami</h3>
                    <p class="text-sm mt-2">0812345678908</p>
                </div>

                <!-- Email -->
                <div>
                    <h3 class="font-bold">📧 Email</h3>
                    <p class="text-sm mt-2">galaxytrk@suksaseslalu.com</p>
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-6 mt-6 flex flex-col md:flex-row justify-between items-center text-blue-700 text-sm">
                <p>© 2025 JBI. Project Based Learning</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
