<?php
// Fungsi untuk menghasilkan hash MD5 dari password
function hashPassword($password) {
    // Menggunakan MD5 untuk hashing password
    return md5($password);
}

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $hashedPassword = hashPassword($password);
    echo "Hash MD5 dari password '$password' adalah: $hashedPassword";
} else {
    // Jika belum disubmit, tampilkan form
?>
    <form method="POST" action="">
        <label for="password">Masukkan password:</label>
        <input type="text" id="password" name="password" required>
        <button type="submit">Hash Password</button>
    </form>
<?php
}
?>
