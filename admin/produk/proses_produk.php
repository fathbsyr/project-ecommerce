<?php 
// Include file koneksi database
require_once '../../dbkoneksi.php';

// Ambil data dari form
$_sku = $_POST['sku'];
$_name = $_POST['name'];
$_hBeli = $_POST['purchase_price'];
$_hJual = $_POST['sell_price'];
$_stok = $_POST['stock'];
$_minStock = $_POST['min_stock'];
$_produk_id = $_POST['product_type_id'];
$_restokID = $_POST['restock_id'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_sku;
$ar_data[]=$_name;
$ar_data[]=$_hBeli;
$ar_data[]=$_hJual;
$ar_data[]=$_stok;
$ar_data[]=$_minStock;
$ar_data[]=$_produk_id;
$ar_data[]=$_restokID;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO product (sku,name,purchase_price,sell_price,stock,min_stock,product_type_id,restock_id) VALUES (?,?,?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE product SET sku=?,name=?,purchase_price=?,sell_price=?,stock=?,min_stock=?,product_type_id=?,restock_id=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_produk.php');
?>
