<?php
    include_once "../../template/atasadmin.php";
?>
<?php 
    // include database connection
    require_once '../../dbkoneksi.php';
?>

<?php 
    // select all data from table "vendor"
    $sql = "SELECT * FROM customer";
    // execute the query
    $rs = $dbh->query($sql);
?>
<h1 class="mt-4">Customer</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Data Customer</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tabel Customer
    </div>
    <div class="card-body">
    <a class="btn btn-success" href="form_customer.php" role="button">Create Customer</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No-HP</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kartu (id)</th>
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
            <td><?=$row['gender']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['card_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_customer.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_customer.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_customer.php?id=<?=$row['id']?>"
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
