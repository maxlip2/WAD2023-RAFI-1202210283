<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
$nama= $_POST['nama_mobil'];
$brand= $_POST['brand_mobil'];
$warna= $_POST['warna_mobil'];
$tipe= $_POST['tipe_mobil'];
$harga= $_POST['harga_mobil'];

$query = mysqli_query($connect,"INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
Value('$nama','$brand','$warna','$tipe','$harga')");
    
if($query){
    echo"<script>alert('Data telah ditambahkan')</script>";
    echo"<meta http-equiv= 'refresh' content='1 url=form_create_mobil.php'>";
}else{
    echo"<script>alert('Gagal ditambahkan')</script>";
    echo"<meta http-equiv= 'refresh' content='1 url=form_create_mobil.php'> ";
}

mysqli_close($connect);



// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil

    // b. Ambil data brand mobil

    // c. Ambil data warna mobil

    // d. Ambil data tipe mobil

    // e. Ambil data harga mobil

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)


    // (5) Buatkan kondisi jika eksekusi query berhasil

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>