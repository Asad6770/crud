<?php 
require_once '../function.php';
$sale = select('sale', '*');
$customer = select('customer', '*');
$where = 'id=' . $_GET['id'];
//calling select function
$data = select('payment', '*', $where);
$row = $data[0];
$id = $row ['id'];
$sale_id = $row['sale_id'];
$customer_id = $row['customer_id'];
$amount = $row['amount'];
$method = $row['method'];
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <input type="hidden" class="form-control" name="type" value="edit">
    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="InputSaleID">Sale ID</label>
        <select class="form-control" name="saleId" id="InputSaleID">
            <option>Select Sale ID</option>
            <?php  foreach ($sale as $value) {        
      echo ' <option value="'.$value['id'].'">'.$value['id'].'</option>';
    }?>
        </select>
    </div>
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
        <input type="text" class="form-control" name="customerId" id="InputQuantity" value="<?php echo $customer_id ?>"
            required>
    </div>
    <div class="form-group">
        <label for="InputPrice">Price</label>
        <input type="text" class="form-control" name="amount" id="InputPrice" value="<?php echo $amount ?>" required>
    </div>
    <div class="form-group">
        <label for="InputMethod">Method</label>
        <input type="text" class="form-control" name="method" id="InputMethod" value="<?php echo $method ?>" required>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>