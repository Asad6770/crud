<?php 
require_once '../function.php';
$supplier = select('supplier', '*');
?>
<form action="process.php" method="post" id="insertForm" class="submitData">
    <input type="hidden" class="form-control" name="type" value="create">
    <div class="form-group">
        <label for="InputSupplierID">Supplier ID</label>
        <select class="form-control" name="supplierId" id="InputSupplierID">
            <option>Select Supplier ID</option>
            <?php  foreach ($supplier as $value) {        
      echo ' <option value="'.$value['id'].'">'.$value['name'].'</option>';
    }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputAmount">Amount</label>
        <input type="text" class="form-control" name="amount" id="InputAmount" required>
    </div>
    <div class="form-group">
        <label for="InputTransactionMethod">Transaction Method</label>
        <input type="text" class="form-control" name="transactionMethod" id="InputTransactionMethod" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>