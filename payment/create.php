<?php 
require_once '../function.php';
$sale = select('sale', '*');
$customer = select('customer', '*');
?>

<form action="process.php" method="post" id="insertForm" class="submitData">
    <input type="hidden" class="form-control" name="type" value="create">
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
        <label for="InputName">Amount</label>
        <input type="text" class="form-control" name="amount" id="InputAmount" required>
    </div>
    <div class="form-group">
        <label for="InputMethod">Method</label>
        <input type="text" class="form-control" name="method" id="InputMethod" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>