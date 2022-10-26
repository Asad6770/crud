<form action="process.php" method="post" id="insertForm" enctype="multipart/form-data" class="submitData">
    <div class="form-group">
        <input type="hidden" class="form-control" name="type" value="create">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" id="InputName" aria-describedby="namelHelp" required>
    </div>
    <div class="form-group">
        <label for="InputAge">Address</label>
        <input type="text" class="form-control" name="address" id="InputAddress" required>
    </div>
    <div class="form-group">
        <label for="InputCity">Mobile</label>
        <input type="text" class="form-control" name="mobile" id="InputMobile" required>
    </div>
    <div class="form-group">
        <label for="InputCity">Bank</label>
        <input type="text" class="form-control" name="bank" id="InputBank" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>