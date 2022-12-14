<?php 
include '../header.php';
$data = select('transaction', '*');
?>
<!-- Modal -->
<div class="container my-4">
    <h1 class="text-center text-bold">Display Transaction Data</h1>
    <!-- Button trigger modal -->
    <a type="button" href="create.php" class="btn btn-primary load" data-toggle="modal" data-target="#exampleModal">
        Add New
    </a>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Supplier ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Transaction Method</th>
                <th scope="col">Time/Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
       foreach ($data as $value) {        
        echo ' <tr>
        <th scope="row">'.$value['id'].'</th>
        <td>'.$value['supplier_id'].'</td>
        <td>'.$value['amount'].'</td>
        <td>'.$value['transaction_method'].'</td>
        <td>'.date_format( new DateTime($value['time']), 'd-F-Y h:i:s' ).'</td>
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