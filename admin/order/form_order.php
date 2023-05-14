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
        $sql = "SELECT * FROM `order` WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>
<h1 class="mt-4">Order</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Form Order</li>
</ol>
<form method="POST" action="proses_order.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Nomor Order</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="order_number" type="text" class="form-control"
        value="<?php if(isset($row['order_number'])) echo $row['order_number']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="date" type="date" class="form-control" 
        value="<?php if(isset($row['date'])) echo $row['date']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Kuantitas</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="harga_beli" name="qty" 
        value="<?php if(isset($row['qty'])) echo $row['qty']; ?>" type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Total Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="total_price" value="<?php if(isset($row['total_price'])) echo $row['total_price']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Customer Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="customer_id" value="<?php if(isset($row['customer_id'])) echo $row['customer_id']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Produk Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="product_id" value="<?php if(isset($row['product_id'])) echo $row['product_id']; ?>"
        type="number" class="form-control">
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
