<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Sidebar Styling */
        .sidebar {
            background-color: #A5C4FF; /* Ubah warna latar belakang sidebar */
            transition: background-color 0.3s;
        }
        .sidebar:hover {
            background-color: #A5C4FF; /* Warna tetap saat hover */
        }
        .sidebar h2 {
            color: #1a202c; /* Warna judul */
        }
        .sidebar-link {
            display: block;
            padding: 10px;
            color: #1a202c; /* Warna link */
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }
        .sidebar-link:hover {
            background-color: rgba(0, 0, 0, 0.1); /* Efek hover */
            color: #1a202c; /* Warna saat hover */
        }

        /* Search Bar */
        .search-bar {
            border: 1px solid #A5C4FF; /* Warna border */
            padding: 10px;
            border-radius: 8px;
            width: 250px;
            transition: border-color 0.3s;
        }
        .search-bar:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Admin Profile */
        .admin-profile {
            background-color: #f3f4f6;
            padding: 10px 15px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .admin-profile:hover {
            background-color: #e2e8f0;
        }

        /* Cards */
        .card {
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
            font-size: 1.2rem;
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: #A5C4FF; /* Warna latar belakang kartu */
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #f1f5f9;
        }

        /* Buttons */
        .btn-delete {
            background-color: #e3342f;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-delete:hover {
            background-color: #cc1f1a;
        }

        .btn-edit {
            background-color: #3490dc;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-edit:hover {
            background-color: #2779bd;
        }

        /* Footer Styling */
        footer {
            background: linear-gradient(to right, #DBE2EF, #A5C4FF); /* Gradien warna */
            color: black;
            padding: 40px 20px;
        }
        footer h4 {
            font-weight: bold;
            margin-bottom: 10px;
            color: #A5C4FF; /* Warna judul di footer */
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 h-screen p-6 sidebar">
            <h2 class="text-3xl font-bold mb-6 text-center flex items-center justify-center">
                <img src="https://img.icons8.com/ios-filled/50/ffffff/galaxy.png" alt="Galaxy Icon" width="30" height="30" />
                Galaxy Store
            </h2>
            <ul>
                <li class="mb-4"><a href="#" class="sidebar-link">Dashboard</a></li>
                <li class="mb-4"><a href="#" class="sidebar-link">Client</a></li>
                <li class="mb-4"><a href="#" class="sidebar-link">Customer</a></li>
                <li class="mb-4"><a href="#" class="sidebar-link">Admin</a></li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="w-4/5 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <input type="text" placeholder="Search..." class="search-bar">
                <div class="admin-profile">👤 Admin</div>
            </div>
            
            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="card">
                    <h3>Client</h3>
                    <p>Jumlah: 10</p>
                </div>
                <div class="card">
                    <h3>Customer</h3>
                    <p>Jumlah: 20</p>
                </div>
                <div class="card">
                    <h3>Admin</h3>
                    <p>Jumlah: 5</p>
                </div>
            </div>
            
            <!-- Customer Table -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Customer List</h3>
                <table>
                    <thead>
                        <tr class="bg-gray-200">
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td class="text-green-500 font-bold">Aktif</td>
                            <td>
                                <button class="btn-delete">Hapus</button>
                                <button class="btn-edit">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td class="text-red-500 font-bold">Tidak Aktif</td>
                            <td>
                                <button class="btn-delete">Hapus</button>
                                <button class="btn-edit">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div>
                <h4>Alamat</h4>
                <p>Jl. Contoh No. 123, Jakarta</p>
            </div>
            <div>
                <h4>Ikuti Kami</h4>
                <p>Instagram</p>
                <p>Shopee</p>
            </div>
            <div>
                <h4>Kontak Kami</h4>
                <p>081234567890</p>
                <p>galaxystore@domain.com</p>
            </div>
        </div>
        <hr class="my-4 border-gray-400">
        <p class="text-center mt-4">Copyright © 2025 JBI. Project Based Learning</p>
    </footer>
</body>
</html>