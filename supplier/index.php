<?php 
include '../header.php';
$data = select('supplier', '*');
?>
<!-- Modal -->
<div class="container my-4">
    <h1 class="text-center text-bold">Display Supplier Data</h1>
    <!-- Button trigger modal -->
    <a type="button" href="create.php" class="btn btn-primary load" data-toggle="modal" data-target="#exampleModal">
        Add New
    </a>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Mobile</th>
                <th scope="col">Bnak</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($data as $value) {        
                    echo ' <tr>
                    <th scope="row">'.$value['id'].'</th>
                    <td>'.$value['name'].'</td>
                    <td>'.$value['address'].'</td>
                    <td>'.$value['mobile'].'</td>
                    <td>'.$value['bank'].'</td>
                    <td class="text-center">
                    <a class="text-white btn btn-success load" href="edit.php?id='.$value['id'].'"data-toggle="modal" data-target="#exampleModal">Update</a> |
                    <a class="text-white btn btn-danger" href="process.php?id='.$value['id'].'&type=delete">Delete</a> |
                    <a class="text-white btn btn-info " href="'.$BASE_URL.'/purchase/index.php?id='.$value['id'].'">View</a>    
                    </td>
                    </tr>';     
                } 
            ?>
        </tbody>
    </table>
</div>
<?php 
include '../footer.php';;
?>