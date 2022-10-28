<?php 
require_once '../function.php';
$sale = select('sale', '*');
$product = select('product', '*');
?>
<form action="process.php" method="post" id="insertForm" class="submitData">
    <input type="hidden" class="form-control" name="type" value="create">

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
        <label for="InputSaleID">Sale ID</label>
        <select class="form-control" name="saleId" id="InputSaleID" required>
            <option>Select Purchase ID</option>
            <?php  foreach ($sale as $value) {        
      echo ' <option value="'.$value['id'].'">'.$value['id'].'</option>';
    }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" id="InputName" required>
    </div>
    <div class="form-group">
        <label for="InputType">Type</label>
        <select class="form-control" name="itemType" id="InputType">
            <option>Select Type</option>
            <?php  foreach ($product as $value) {        
      echo ' <option value="'.$value['type'].'">'.$value['type'].'</option>';
    }?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>