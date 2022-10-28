<?php 
// function file 
require '..\function.php';
// get id
$where = 'id=' . $_GET['id'];
//calling select function
$data = select('purchase_item', '*', $where);
    $row = $data[0];
    $purchase_id = $row['purchase_id'];
    $product_id = $row['product_id'];
    $name = $row['name'];
    $price = $row['price'];
    $qty = $row['qty'];
$purchase = select('purchase', '*');
$product = select('product', '*');
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <input type="hidden" class="form-control" name="type" value="edit">
    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="InputPurchaseID">Purchase ID</label>
            <select class="form-control" name="purchaseId" id="InputPurchaseID" required>
                <option>Select Purchase ID</option>
                <?php  
                    foreach ($purchase as $value) {        
                        echo ' <option value='.$value['id'];
                            if ($value['id'] == $purchase_id ) {
                                echo 'selected = selected';
                            }
                        echo '>'.$value['id'].'</option>';
                    }
                ?>
            </select>
    </div>
    <div class="form-group">
        <label for="InputProductID">Product ID</label>
            <select class="form-control" name="productId" id="InputProductID">
                <option>Select Product ID</option>
                <?php  
                    foreach ($product as $value) {        
                        echo ' <option value='.$value['id'];
                            if ($value['id'] == $product_id) {
                                echo 'selected = selected';
                            }
                        echo '>'.$value['name'].'</option>';
                }
                ?>
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

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>