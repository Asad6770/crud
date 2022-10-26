<?php 
// database include
include '..\config.php';
// function file 
require '..\function.php';
// get id
$where = 'id=' . $_GET['id'];
//calling select function
$data = select('product', '*', $where);
$supplier = select('supplier', '*');
$purchase_item = select('purchase_item', '*');
$row = $data[0];
$id = $row['id'];
$supplier_id = $row['supplier_id'];
$name = $row['name'];
$price = $row['price'];
$qty = $row['qty'];
$type = $row['type'];
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <input type="hidden" class="form-control" name="type" value="edit">
    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="InputSupplierID">Supplier ID</label>
        <select class="form-control" name="supplierId" id="InputSupplierID">
            <option>Select Supplier ID</option>
            <?php  foreach ($supplier as $value) {        
            echo ' <option value="'.$value['id'].'"
            '.if ($value['id'] == $supplier_id) {
                echo ' selected="selected"'; 
            }.'
            >'.
            echo $value['name'].'</option>';
      }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" id="InputName" value="<?php echo $name ?>" required>
    </div>
    <div class="form-group">
        <label for="InputQuantity">Quantity</label>
        <input type="text" class="form-control" name="qty" id="InputQuantity" value="<?php echo $qty ?>" required>
    </div>
    <div class="form-group">
        <label for="inputPrice">Price</label>
        <input type="text" class="form-control" id="inputPrice" name="price" value="<?php echo $price ?>" required>
    </div>
    <div class="form-group">
        <label for="InputType">Type</label>
        <select class="form-control" name="itemType" id="InputType">
            <option>Select Type</option>
            <?php  foreach ($purchase_item as $value) {        
        echo ' <option value="'.$value['type'].'">'.$value['type'].'</option>';
      }?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>