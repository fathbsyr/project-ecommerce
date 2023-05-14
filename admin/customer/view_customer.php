<?php
    include_once "../../template/atasadmin.php";
?>
<?php 
require_once '../../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM customer WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>
<h1 class="mt-4">Customer</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Detail Customer</li>
</ol>
<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
        <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$row['gender']?></td>
        </tr>
        <tr>
            <td>No-HP</td>
            <td><?=$row['phone']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$row['email']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?=$row['address']?></td>
        </tr>
        <tr>
            <td>Kartu</td>
            <td><?=$row['card_id']?></td>
        </tr>
    </tbody>
</table>

<?php
    include_once "../../template/bawahadmin.php";
?>
