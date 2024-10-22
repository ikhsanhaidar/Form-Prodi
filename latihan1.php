<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Program Studi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 300px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h3>Masukkan angka pilihan Program Studi:</h3>
        <p>1. Teknik Informatika</p>
        <p>2. Rekayasa Perangkat Lunak</p>

        <input type="number" name="prodi" min="1" max="2" required>
        <button type="submit">Submit</button>

        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $pilihan = $_POST['prodi'];

                // Menampilkan hasil berdasarkan pilihan
                switch ($pilihan) {
                    case 1:
                        echo "Program Studi Teknik Informatika";
                        break;
                    case 2:
                        echo "Program Studi Rekayasa Perangkat Lunak";
                        break;
                    default:
                        echo "Pilihan tidak tersedia";
                        break;
                }
            }
            ?>
        </div>
    </form>
</body>
</html>
