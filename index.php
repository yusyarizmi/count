<?php
date_default_timezone_set('Asia/Jakarta');

$currentTime = date('H:i');

if ($currentTime >= '05:00' && $currentTime < '10:00') {
    $timeOfDay = 'Pagi';
} elseif ($currentTime >= '10:00' && $currentTime < '15:00') {
    $timeOfDay = 'Siang';
} elseif ($currentTime >= '15:00' && $currentTime < '18:00') {
    $timeOfDay = 'Sore';
} else {
    $timeOfDay = 'Malam';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>easy masbroo:)</title>
</head>

<body>
    <h1>Tanggal: <?php echo date("l, d/m/y") ?></h1>
    <h1>Jam: <span id="current-time"><?php echo date("H:i:s"); ?></span></h1>
    <center>
        <button onclick="alertNama()">Harus dibaca!!!!</button>
        <a href="count.php"><button>Ini tugas ku</button><a>
                <h2>Aku Gabut Pakk</h2>
                <iframe src="https://pointerpointer.com/" width="800" height="600"></iframe>
    </center>
    <script>
        function alertNama() {
            alert('<?php echo "Selamat $timeOfDay." ?> Kak Akbar\nNama saya Abdullah Yusya\nKelas 10 ppl');
        }

        function updateTime() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();

            // Menambahkan nol di depan angka jika kurang dari 10
            if (hours < 10) {
                hours = "0" + hours;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }

            var formattedTime = hours + ":" + minutes + ":" + seconds;
            document.getElementById("current-time").innerHTML = formattedTime;
        }
        setInterval(updateTime, 1000);
    </script>
</body>

</html>