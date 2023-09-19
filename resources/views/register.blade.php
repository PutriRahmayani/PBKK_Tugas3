<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Monitoring dan Pendataan Barang Lab</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7; /* Warna latar belakang */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4F709C; /* Warna header */
            color: #fff;
            text-align: center;
            padding: 40px 0;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #D8C4B6; /* Warna latar container */
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-size: 16px;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #213555; /* Warna tombol */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4F709C; /* Warna tombol saat dihover */
        }

        footer {
            background-color: #213555; /* Warna footer */
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Registrasi - Monitoring dan Pendataan Barang Lab</h1>
    </header>
    <div class="container">
        <h2>Formulir Registrasi</h2>
        <form action="process_register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm_password">Konfirmasi Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>

            <button type="submit">Daftar</button>
        </form>
    </div>
    <footer>
        &copy; 2023 Monitoring dan Pendataan Barang Lab
    </footer>
</body>
</html>
