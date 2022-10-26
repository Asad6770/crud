<?php 
include '../header.php';
$data = select('payment', '*');
?>

<!-- Modal -->
<div class="container my-4">
    <h1 class="text-center text-bold">Display Payment Data</h1>
    <!-- Button trigger modal -->
    <a type="button" href="create.php" class="btn btn-primary load" data-toggle="modal" data-target="#exampleModal">
        Add New
    </a>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sale ID</th>
                <th scope="col">Customer ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Method</th>
                <th scope="col">Time/Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
       foreach ($data as $value) {        
        echo ' <tr>
        <th scope="row">'.$value['id'].'</th>
        <td>'.$value['sale_id'].'</td>
        <td>'.$value['customer_id'].'</td>
        <td>'.$value['amount'].'</td>
        <td>'.$value['method'].'</td>
        <td>'.date_format( new DateTime($value['timeDate']), 'd-F-Y h:i:s' ).'</td>
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