<?php
    include_once "../../template/atasadmin.php";
?>
<?php 
require_once '../../dbkoneksi.php';
?>
<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data produk berdasarkan id
        $sql = "SELECT * FROM product_type WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>
<h1 class="mt-4">Tipe Produk</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Form Tipe Produk</li>
</ol>
<form method="POST" action="proses_produk_tipe.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="name" type="text" class="form-control"
        value="<?php if(isset($row['name'])) echo $row['name']; ?>">
      </div>
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
</form>
<?php
    include_once "../../template/bawahadmin.php";
?>
