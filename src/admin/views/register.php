<form class="row g-3">
  <div class="col-md-6">
    <form action="../config/process-register.php" method="POST">
    <label for="inputEmail4" class="form-label">First Name</label><br>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label><br>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Email</label><br>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">ID Number</label><br>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Phone Number</label><br>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Gender</label><br>
    <select id="inputState" class="form-select">
      <option selected>Male</option>
      <option>Female</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Password</label><br>
    <input type="password" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label><br>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>