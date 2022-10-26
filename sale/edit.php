<?php 
// function file 
require '..\function.php';
// get id
$where = 'id=' . $_GET['id'];
//calling select function
$customer = select('customer', '*');
$data = select('sale', '*', $where);
$row = $data[0];
$id = $row['id'];
$customer_id = $row['customer_id'];
$qty = $row['qty'];
$price = $row['price'];
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <input type="hidden" class="form-control" name="type" value="edit">
    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="InputCustomerID">Customer ID</label>
        <select class="form-control" name="customerId" id="InputCustomerID">
            <option>Select Customer ID</option>
            <?php  foreach ($customer as $value) {        
      echo ' <option value="'.$value['id'].'">'.$value['name'].'</option>';
    }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputQuantity">Quantity</label>
        <input type="text" class="form-control" name="qty" id="InputQuantity" value="<?php echo $qty ?>" required>
    </div>
    <div class="form-group">
        <label for="InputPrice">Price</label>
        <input type="text" class="form-control" name="price" id="InputPrice" value="<?php echo $price ?>" required>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>