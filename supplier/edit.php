<?php 

// database include
include '..\config.php';
// function file 
require '..\function.php';
// get id
$where = 'id=' . $_GET['id'];
//calling select function
$data = select('supplier', '*', $where);
$row = $data[0];
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$mobile = $row['mobile'];
$bank = $row['bank'];
?>

<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <div class="form-group">
        <input type="hidden" class="form-control" name="type" value="edit">
        <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" id="InputName" aria-describedby="namelHelp"
            value="<?php echo $name ?>" required>
    </div>
    <div class="form-group">
        <label for="InputAddress">Address</label>
        <input type="text" class="form-control" name="address" id="InputAddress" value="<?php echo $address ?>"
            required>
    </div>
    <div class="form-group">
        <label for="InputMobile">Mobile</label>
        <input type="text" class="form-control" name="mobile" id="InputMobile" value="<?php echo $mobile ?>" required>
    </div>
    <div class="form-group">
        <label for="inputBank">Bank</label>
        <input type="text" class="form-control" id="inputBank" name="bank" value="<?php echo $bank ?>" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>