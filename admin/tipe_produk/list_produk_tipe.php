<?php
    include_once "../../template/atasadmin.php";
?>
<?php 
    // include database connection
    require_once '../../dbkoneksi.php';
?>

<?php 
    // select all data from table "vendor"
    $sql = "SELECT * FROM product_type";
    // execute the query
    $rs = $dbh->query($sql);
?>
<h1 class="mt-4">Tipe Produk</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Data Tipe Produk</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tabel Produk
    </div>
    <div class="card-body">
    <a class="btn btn-success" href="form_produk_tipe.php" role="button">Create Product Type</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
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
            <td><?=$row['name']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_produk_tipe.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_produk_tipe.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_produk_tipe.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data vendor <?=$row['name']?>?')) {return false}"
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
