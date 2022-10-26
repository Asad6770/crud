<?php 
require_once '../function.php';
$customer = select('customer', '*');
?>
<form action="process.php" method="post" id="insertForm" class="submitData">
    <input type="hidden" class="form-control" name="type" value="create">
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
        <input type="text" class="form-control" name="qty" id="InputQuantity" required>
    </div>
    <div class="form-group">
        <label for="InputPrice">Price</label>
        <input type="text" class="form-control" name="price" id="InputPrice" required>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

</form>