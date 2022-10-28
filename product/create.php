<?php 
require_once '../function.php';
  $supplier = select('supplier', '*');
  $purchase_item = select('purchase_item', '*');
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
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" id="InputName" required>
    </div>
    <div class="form-group">
        <label for="InputPrice">Price</label>
        <input type="text" class="form-control" name="price" id="InputPrice" required>
    </div>
    <div class="form-group">
        <label for="InputQty">Quantity</label>
        <input type="text" class="form-control" name="qty" id="InputQty" required>
    </div>
    <div class="form-group">
        <label for="InputType">Type</label>
        <input type="text" class="form-control" name="itemType" id="InputType" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>