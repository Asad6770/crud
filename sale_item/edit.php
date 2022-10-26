<?php 
// function file 
require '..\function.php';
// get id
$where = 'id=' . $_GET['id'];
//calling select function
$sale = select('sale', '*');
$product = select('product', '*');
$purchase_item = select('purchase_item', '*');
$data = select('sale_item', '*', $where);
$row = $data[0];
$id = $row['id'];
$product_id = $row['product_id'];
$sale_id = $row['sale_id'];
$name = $row['name'];
$type = $row['type'];
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <input type="hidden" class="form-control" name="type" value="
  edit">
    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
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
            <input type="text" class="form-control" name="name" id="InputName" value="<?php echo $name ?>" required>
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