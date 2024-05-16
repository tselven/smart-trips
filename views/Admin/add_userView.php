<?php include "partials/head.php" ?>
<?php

use Core\Helper; ?>
<?php include "partials/aside.php" ?>
<!-- Main Content -->
<div class="main-content">
  <div class="card">
    <div class="card-header">
      <h4>Add New User</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="form-group col-6">
          <label>First Name</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-6">
          <label>Last Name</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control">
        </div>
      <div class="form-group">
        <label>User Type</label>
        <select class="form-control">
          <option>Traveler</option>
          <option>Guide</option>
          <option>Partner</option>
          <option>Admin</option>
        </select>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control">
      </div>
      <div class="form-group">
        <label>File</label>
        <input type="file" class="form-control">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control">
      </div>
      <div class="form-group">
        <label class="d-block">Radio</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
          <label class="form-check-label" for="exampleRadios2">
            Female
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Tel</label>
        <input type="tel" class="form-control">
      </div>
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary mr-1" type="submit">Submit</button>
      <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
  </div>
</div>
<?php include "partials/footer.php" ?>