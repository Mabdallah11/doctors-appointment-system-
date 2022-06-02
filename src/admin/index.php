<?php
include_once "includes/header.inc.php";
?>

<div class="container">
    <h1>Administrator</h1>
    <form>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input name="admin-username" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="admin-password" type="password" class="form-control" id="exampleInputPassword1">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php
include_once "includes/footer.inc.php";
?>