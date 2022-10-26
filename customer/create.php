<form action="process.php" method="post" id="insertForm" class="submitData">
    <input type="hidden" class="form-control" name="type" value="create">

    <div class="form-group">
        <label for="InputName">Customer Name</label>
        <input type="text" class="form-control" name="name" id="InputName" required>
    </div>
    <div class="form-group">
        <label for="InputMobile">Mobile</label>
        <input type="text" class="form-control" name="mobile" id="InputMobile" required>
    </div>
    <div class="form-group">
        <label for="InputAddress">Address</label>
        <input type="text" class="form-control" name="address" id="InputAddress" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>