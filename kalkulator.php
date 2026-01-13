<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(242, 140, 187);
            text-align: center;
            margin-top: 50px;
        }

        .kalkulator {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="number"], select {
            width: 100px;
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color:rgb(146, 30, 146);
            color: white;
            border: none;
            cursor: pointer;
        }

        .hasil {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>

    <div class="kalkulator">
        <h2>Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" name="angka1" required placeholder="Angka 1">
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">−</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="angka2" required placeholder="Angka 2">
            <br><br>
            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $a = $_POST['angka1'];
            $b = $_POST['angka2'];
            $op = $_POST['operator'];
            $hasil = 0;

            switch ($op) {
                case '+':
                    $hasil = $a + $b;
                    break;
                case '-':
                    $hasil = $a - $b;
                    break;
                case '*':
                    $hasil = $a * $b;
                    break;
                case '/':
                    if ($b != 0) {
                        $hasil = $a / $b;
                    } else {
                        $hasil = "Tidak bisa dibagi 0";
                    }
                    break;
                default:
                    $hasil = "Operator tidak dikenal";
            }

            echo "<div class='hasil'><strong>Hasil: </strong> $hasil</div>";
        }
        ?>
    </div>

</body>
</html>