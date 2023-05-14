<?php
    include_once "../../template/atasadmin.php";
?>
<?php 
    // include database connection
    require_once '../../dbkoneksi.php';
?>

<?php 
    // select all data from table "vendor"
    $sql = "SELECT * FROM product";
    // execute the query
    $rs = $dbh->query($sql);
?>
<h1 class="mt-4">Produk</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Data produk</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tabel Produk
    </div>
    <div class="card-body">
    <a class="btn btn-success" href="form_produk.php" role="button">Create produk</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>#</th>
            <th>Sku</th>
            <th>Nama</th>
            <th>Harga-Beli</th>
            <th>Harga-Jual</th>
            <th>Stok</th>
            <th>Min-Stok</th>
            <th>Id-Tipe Produk</th>
            <th>Id-Restok</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['sku']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['purchase_price']?></td>
            <td><?=$row['sell_price']?></td>
            <td><?=$row['stock']?></td>
            <td><?=$row['min_stock']?></td>
            <td><?=$row['product_type_id']?></td>
            <td><?=$row['restock_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_produk.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_produk.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data vendor <?=$row['sku']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $id++;   
            } 
        ?>
    </tbody>
</table>
    </div>
</div>
</div>
</main>

<?php
    include_once "../../template/bawahadmin.php";
?>
