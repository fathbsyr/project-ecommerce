<?php
include_once "../../template/atasadmin.php";
?>
<?php
require_once '../../dbkoneksi.php';
?>
<?php
// cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
  // ambil data produk berdasarkan id
  $sql = "SELECT * FROM customer WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
} else {
  // jika tidak ada parameter id pada URL, maka dianggap input data baru
  // inisialisasi variabel $row sebagai array kosong
  $row = [];
}
?>
<h1 class="mt-4">Customer</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Form Customer</li>
</ol>
<form method="POST" action="proses_customer.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="kode" name="name" type="text" class="form-control" value="<?php if (isset($row['name'])) echo $row['name']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Jenis Kelamin</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama" name="gender" type="text" class="form-control" value="<?php if (isset($row['gender'])) echo $row['gender']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Nomor HP</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="harga_beli" name="phone" value="<?php if (isset($row['phone'])) echo $row['phone']; ?>" type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">email</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="stok" name="email" value="<?php if (isset($row['email'])) echo $row['email']; ?>" type="email" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Alamat</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="stok" name="address" value="<?php if (isset($row['address'])) echo $row['address']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Kartu Id</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="stok" name="card_id" value="<?php if (isset($row['card_id'])) echo $row['card_id']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php
      $button = (empty($_id)) ? "Simpan" : "Update";
      ?>
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
      <input type="hidden" name="id" value="<?= $_id ?>" />
    </div>
  </div>
</form>
<?php
include_once "../../template/bawahadmin.php";
?>