<?php 
require_once '../function.php';
$where = 'id=' . $_GET['id'];
$supplier = select('supplier', '*');
//calling select function
$data = select('transaction', '*', $where);
$row = $data[0];
$supplier_id = $row['supplier_id']; 
$amount = $row['amount'];
$transaction_method = $row['transaction_method'];
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <input type="hidden" class="form-control" name="type" value="edit">
    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="InputSupplierID">Supplier ID</label>
        <select class="form-control" name="supplierId" id="InputSupplierID">
            <option>Select Supplier ID</option>
                <?php
                    foreach ($supplier as $value) {        
                        echo ' <option value='.$value['id'];
                            if ($value['id'] == $supplier_id) {
                                echo 'selected = selected';
                            }
                        echo '>'.$value['name'].'</option>';
                    }
                ?>
        </select>
    </div>

    <div class="form-group">
        <label for="InputAmount">Amount</label>
        <input type="text" class="form-control" name="amount" id="InputAmount" value="<?php echo $amount ?>" required>
    </div>

    <div class="form-group">
        <label for="InputTransactionMethod">Address</label>
        <input type="text" class="form-control" name="transactionMethod" id="InputTransactionMethod"
        value="<?php echo $transaction_method ?>" required>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>  
    
</form>