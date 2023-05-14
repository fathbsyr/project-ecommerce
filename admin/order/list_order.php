<?php
    include_once "../../template/atasadmin.php";
?>
<?php 
    // include database connection
    require_once '../../dbkoneksi.php';
?>

<?php 
    // select all data from table "vendor"
    $sql = "SELECT * FROM `order`";
    // execute the query
    $rs = $dbh->query($sql);
?>
<h1 class="mt-4">Order</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Data Order</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tabel Order
    </div>
    <div class="card-body">
    <a class="btn btn-success" href="form_order.php" role="button">Create Order</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor Order</th>
            <th>Tanggal</th>
            <th>Kuantitas</th>
            <th>Total Harga</th>
            <th>Kustomer Id</th>
            <th>Produk Id</th>
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
            <td><?=$row['order_number']?></td>
            <td><?=$row['date']?></td>
            <td><?=$row['qty']?></td>
            <td><?=$row['total_price']?></td>
            <td><?=$row['customer_id']?></td>
            <td><?=$row['product_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_order.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_order.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_order.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data vendor <?=$row['order_number']?>?')) {return false}"
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
