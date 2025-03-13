<?php
session_start();


if (isset($_SESSION['nama']) && isset($_SESSION['nim'])) {
    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
</head>
<body>

    <?php
    $nama = $nim = "";
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
        $nim = isset($_POST["nim"]) ? htmlspecialchars($_POST["nim"]) : "";

        // Validasi input
        if (!empty($nama) && !empty($nim)) {
            $message = "Hello " . $nama . "!";
        } else {
            $message = "Please fill out both fields.";
        }
    }
    ?>

    <form method="post" action="index.php">
        <label for="nama">Nama panjang: </label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>"><br>
        
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>"><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <!-- Menampilkan pesan -->
    <div id="message">
        <?php echo $message; ?>
    </div>

</body>
</html>
