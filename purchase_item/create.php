<?php 
require_once '../function.php';
$purchase = select('purchase', '*');
$product = select('product', '*');
?>

<form action="process.php" method="post" id="insertForm" class="submitData">
    <input type="hidden" class="form-control" name="type" value="create">
    <div class="form-group">
        <label for="InputPurchaseID">Purchase ID</label>
        <select class="form-control" name="purchaseId" id="InputPurchaseID" required>
            <option>Select Purchase ID</option>
            <?php  foreach ($purchase as $value) {        
      echo ' <option value="'.$value['id'].'">'.$value['id'].'</option>';
    }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputProductID">Product ID</label>
        <select class="form-control" name="productId" id="InputProductID">
            <option>Select Product ID</option>
            <?php  foreach ($product as $value) {        
      echo ' <option value="'.$value['id'].'">'.$value['name'].'</option>';
    }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" id="InputName" required>
    </div>
    <div class="form-group">
        <label for="InputQty">Quantity</label>
        <input type="text" class="form-control" name="qty" id="InputQty" required>
    </div>
    <div class="form-group">
        <label for="InputPrice">Price</label>
        <input type="text" class="form-control" name="price" id="InputPrice" required>
    </div>
    
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>