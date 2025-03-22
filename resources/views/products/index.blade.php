<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Store</title>
    <style>
        /* Styling Umum */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5; /* Light gray background */
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:rgb(126, 113, 108); /* Shopee-like orange */
            color: white;
            padding: 15px 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color:rgb(128, 119, 107); /* Lighter orange on hover */
        }

        /* Banner */
        .banner {
            background-color:rgb(121, 104, 100); /* Banner color */
            color: white;
            text-align: center;
            padding: 50px 20px;
            margin-bottom: 20px;
        }

        .banner h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        /* Produk */
        .products {
            text-align: center;
            padding: 30px;
        }

        .products h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .product-list {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .product {
            background-color: white; /* White background for products */
            padding: 20px;
            border-radius: 12px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .product:hover {
            transform: translateY(-5px); /* Lift effect on hover */
        }

        .product img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .product p {
            font-size: 14px;
            color: #666;
        }

        .price {
            display: block;
            font-size: 16px;
            font-weight: bold;
            color:rgb(104, 94, 91); /* Price color */
            margin: 10px 0;
        }

        /* Tombol */
        button {
            background-color:rgb(124, 112, 108); /* Button color */
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:rgb(156, 141, 137); /* Darker on hover */
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Galaxy Store</div>
        <nav>
            <a href="#">Beranda</a>
            <a href="#">Produk</a>
            <a href="#">Keranjang</a>
        </nav>
    </header>

    <section class="banner">
        <h1>Temukan Produk Terbaik di Galaxy Store</h1>
        <p>Dapatkan penawaran menarik hanya di sini</p>
    </section>

    <section class="products">
        <h2>Produk Unggulan</h2>
        <div class="product-list">
            <div class="product">
                <img src="images/pensil.jpeg" alt="Produk 1">
                <h3>Pensil</h3>
                <p>Deskripsi singkat produk 1.</p>
                <span class="price">Rp 4.000</span>
                <button>Tambah ke Keranjang</button>
            </div>
            <div class="product">
                <img src="images/pulpen.jpeg" alt="Produk 2">
                <h3>Pulpen</h3>
                <p>Deskripsi singkat produk 2.</p>
                <span class="price">Rp 5.000</span>
                <button>Tambah ke Keranjang</button>
            </div>
            <div class="product">
                <img src="images/spidol.jpeg" alt="Produk 3">
                <h3>Spidol</h3>
                <p>Deskripsi singkat produk 3.</p>
                <span class="price">Rp 10.000</span>
                <button>Tambah ke Keranjang</button>
            </div>
        </div>
    </section>
</body>
</html>