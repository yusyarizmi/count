<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator dan Perhitungan</title>
</head>
<body>
    <h1>Kalkulator dan Perhitungan</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST["action"];
        $result = "";
        
        if ($action == "luas_segi_panjang") {
            $length = $_POST["length"];
            $width = $_POST["width"];
            $result = "Luas Segi Panjang: " . ($length * $width);
        } elseif ($action == "volume_kubus") {
            $side = $_POST["side"];
            $result = "Volume Kubus: " . ($side * $side * $side);
        } elseif ($action == "luas_permukaan_balok") {
            $length = $_POST["length"];
            $width = $_POST["width"];
            $height = $_POST["height"];
            $result = "Luas Permukaan Balok: " . (2 * ($length * $width + $width * $height + $height * $length));
        } elseif ($action == "kalkulator") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];
            
            if ($operator == "+") {
                $result = "Hasil: " . ($num1 + $num2);
            } elseif ($operator == "-") {
                $result = "Hasil: " . ($num1 - $num2);
            } elseif ($operator == "*") {
                $result = "Hasil: " . ($num1 * $num2);
            } elseif ($operator == "/") {
                if ($num2 != 0) {
                    $result = "Hasil: " . ($num1 / $num2);
                } else {
                    $result = "Pembagian dengan nol tidak valid.";
                }
            }
        }
        
        echo "<p>$result</p>";
    }
    ?>

    <h2>Perhitungan Luas Segi Panjang</h2>
    <form method="post">
        Panjang: <input type="number" name="length"><br>
        Lebar: <input type="number" name="width"><br>
        <input type="hidden" name="action" value="luas_segi_panjang">
        <input type="submit" value="Hitung">
    </form>

    <h2>Perhitungan Volume Kubus</h2>
    <form method="post">
        Sisi: <input type="number" name="side"><br>
        <input type="hidden" name="action" value="volume_kubus">
        <input type="submit" value="Hitung">
    </form>

    <h2>Perhitungan Luas Permukaan Balok</h2>
    <form method="post">
        Panjang: <input type="number" name="length"><br>
        Lebar: <input type="number" name="width"><br>
        Tinggi: <input type="number" name="height"><br>
        <input type="hidden" name="action" value="luas_permukaan_balok">
        <input type="submit" value="Hitung">
    </form>

    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        Angka 1: <input type="number" name="num1"><br>
        Angka 2: <input type="number" name="num2"><br>
        Operator: 
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <input type="hidden" name="action" value="kalkulator">
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
