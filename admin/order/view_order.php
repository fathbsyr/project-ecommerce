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
    $sql = "SELECT * FROM `order` WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>
<h1 class="mt-4">Order</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Detail Order</li>
</ol>
<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
        <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>SKU</td>
            <td><?=$row['order_number']?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><?=$row['date']?></td>
        </tr>
        <tr>
            <td>Kuantitas</td>
            <td><?=$row['qty']?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><?=$row['total_price']?></td>
        </tr>
        <tr>
            <td>Customer Id</td>
            <td><?=$row['customer_id']?></td>
        </tr>
        <tr>
            <td>Produk Id</td>
            <td><?=$row['product_id']?></td>
        </tr>
    </tbody>
</table>

<?php
    include_once "../../template/bawahadmin.php";
?>
