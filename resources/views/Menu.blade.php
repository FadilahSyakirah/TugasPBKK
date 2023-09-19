<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .menu-item {
            display: flex;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .menu-item img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-right: 20px;
            border-radius: 5px;
        }

        .menu-item-details {
            flex: 1;
        }

        .menu-item h2 {
            margin: 0;
            font-size: 24px;
        }

        .menu-item p {
            margin: 10px 0;
            font-size: 16px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar h1 {
            margin: 0;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            margin-right: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Palugada</h1>
        <p>Apa Lu Butuh Gua Ada</p>
        <p>Nikmati berbagai hidangan lezat di tempat kami.</p>
        <header>
        <div class="navbar">
            <h1>Restoran Palugada</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Booking">Booking</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <h2>Menu Kami</h2>

        <div class="menu-item">
            <img src="menu1.jpg" alt="Menu 1">
            <div class="menu-item-details">
                <h2>Menu 1</h2>
                <p>Deskripsi menu 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Harga: $10.99</p>
            </div>
        </div>

        <div class="menu-item">
            <img src="menu2.jpg" alt="Menu 2">
            <div class="menu-item-details">
                <h2>Menu 2</h2>
                <p>Deskripsi menu 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Harga: $12.99</p>
            </div>
        </div>

        <!-- Tambahkan menu lainnya di sini -->

    </div>

    <footer>
        Restoran Palugada
    </footer>
</body>
</html>
