<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALAXY STORE - Registrasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #dfe3eb;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .registration-container {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 600px;
            padding: 20px;
            align-items: center;
            justify-content: space-between;
        }
        .registration-form {
            width: 50%;
            padding: 20px;
            text-align: center;
        }
        .registration-form h2 {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .input-group {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            margin: 15px 0;
            padding: 5px;
        }
        .input-group i {
            margin-right: 10px;
            color: #666;
        }
        input {
            border: none;
            outline: none;
            width: 100%;
            padding: 10px;
            font-size: 14px;
        }
        .btn {
            background-color: rgb(211, 216, 225);
            color: black;
            padding: 12px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #c0c4cc;
        }
        .divider {
            margin: 15px 0;
            font-size: 12px;
            color: #666;
        }
        .link {
            font-size: 12px;
            font-weight: bold;
            color: black;
        }
        .image-container {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-container img {
            width: 100%;
            height: auto;
            max-width: 150px;
            border-radius: 20px;
            object-fit: cover;
        }
        .footer {
            background-color: #dfe3eb;
            width: 100%;
            margin-top: 20px;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #333;
            border-radius: 5px;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 10px;
        }
        .footer-column {
            text-align: left;
        }
        .footer-column h4 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        .footer-column h4 i {
            margin-right: 8px;
            color: red;
        }
        .footer-column p {
            font-size: 14px;
            margin: 5px 0;
        }
        .footer-column a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-right: 8px;
        }
        .footer-bottom {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
            color: #666;
        }
    </style>
</head>
<body>

    <!-- Form Registrasi -->
    <div class="registration-container">
        <div class="registration-form">
            <h2>REGISTRASI</h2>
            <form action="{{ route('client.register.submit') }}" method="POST">
                @csrf
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <button type="submit" class="btn">DAFTAR</button>
                <p class="divider">ATAU</p>
                <p class="link">SUDAH PUNYA AKUN? LOGIN DI SINI</p>
            </form>
        </div>
        <div class="image-container">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo Galaxy Store">
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4><i class="fas fa-map-marker-alt"></i> Alamat</h4>
                <p>Galaxy Store, Srono</p>
            </div>
            <div class="footer-column">
                <h4><i class="fas fa-bullhorn"></i> Ikuti Kami</h4>
                <p>
                    <a href="#">Instagram</a>
                    <a href="#">Shopee</a>
                </p>
            </div>
            <div class="footer-column">
                <h4><i class="fas fa-phone"></i> Kontak Kami</h4>
                <p>0812-3456-7890</p>
                <p>0812-9876-5432</p>
            </div>
        </div>
        <div class="footer-bottom">
            © 2025 Galaxy Store - All Rights Reserved.
        </div>
    </div>

</body>
</html>