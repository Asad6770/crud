<?php 
require_once '../function.php';
  $data = select('supplier', '*');
 ?>
<form action="process.php" method="post" id="insertForm" class="submitData">
    <div class="form-group">
        <input type="hidden" class="form-control" name="type" value="create">
        <label for="InputSupplierID">Supplier ID</label>
        <select class="form-control" name="supplierid" id="InputSupplierID">
            <option>Select Supplier ID</option>
            <?php  foreach ($data as $value) {        
        echo ' <option value="'.$value['id'].'">'.$value['name'].'</option>';
      }?>
        </select>
    </div>
    <div class="form-group">
        <label for="InputWeight">Weight</label>
        <input type="text" class="form-control" name="weight" id="InputWeight" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>