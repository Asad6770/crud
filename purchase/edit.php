<?php 

// function file 
require_once '..\function.php';
// get id
$where = 'id=' . $_GET['id'];
//calling select function
$data = select('purchase', '*', $where);
$row = $data[0];
$weight = $row['weight'];
$supplier = select('supplier', '*');
//$id = $data[0]['id'];

?>

<form action="process.php" method="post" id="insertForm" class="submitData">
    <div class="form-group">
        <input type="hidden" class="form-control" name="type" value="edit">
        <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
        <label for="InputSupplierID">Supplier ID</label>
        <select class="form-control" name="supplierid" id="InputSupplierID">
            <option>Select Supplier ID</option>
            <?php  foreach ($supplier as $value) {        
        echo ' <option value="'.$value['id'].'">'.$value['name'].'</option>';
      }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputAddress">Weight</label>
        <input type="text" class="form-control" name="weight" id="InputWeight" value="<?php echo $weight ?>" required>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>