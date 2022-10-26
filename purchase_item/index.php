<?php 
include '../header.php';
$data = select('purchase_item', '*');
?>

<!-- Modal -->
<div class="container my-4">
    <h1 class="text-center text-bold">Display Purchase Item Data</h1>
    <!-- Button trigger modal -->
    <a type="button" href="create.php" class="btn btn-primary load" data-toggle="modal" data-target="#exampleModal">
        Add New
    </a>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Purchase ID</th>
                <th scope="col">Product ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">QTY</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
       foreach ($data as $value) {        
        echo ' <tr>
        <th scope="row">'.$value['id'].'</th>
        <td>'.$value['purchase_id'].'</td>
        <td>'.$value['product_id'].'</td>
        <td>'.$value['name'].'</td>
        <td>'.$value['price'].'</td>
        <td>'.$value['qty'].'</td>
        <td>'.$value['type'].'</td>
        <td>
        <a class="text-white btn btn-success load" href="edit.php?id='.$value['id'].'"data-toggle="modal" data-target="#exampleModal">Update</a> |
        <a class="text-white btn btn-danger" href="process.php?id='.$value['id'].'">Delete</a>        
        </td>
        </tr>';
      } ?>
        </tbody>
    </table>
</div>
<?php 
include '../footer.php';
?>