<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Palugada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .intro {
            text-align: center;
            padding: 20px;
        }

        .intro h2 {
            font-size: 36px;
            margin: 0;
        }

        .intro p {
            font-size: 18px;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.7);
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
        <h1>Selamat Datang di Restoran Palugada</h1>
        <p>Nikmati berbagai hidangan lezat di tempat kami.</p>
        <header>
        <div class="navbar">
            <h1>Restoran Palugada</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Menu">Menu</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="intro">
            <h2>Tentang Restoran Kami</h2>
            <p>Restoran Palugada adalah tempat makanan yang paling lengkap. sempurna untuk menikmati hidangan berkualitas tinggi dalam suasana yang santai.
                 Kami menghadirkan berbagai pilihan menu lezat dan staf yang ramah siap melayani Anda.</p>
        </div>
    </div>

    <footer>
        &copy; 2023 Restoran Palugada
    </footer>
</body>
</html>
