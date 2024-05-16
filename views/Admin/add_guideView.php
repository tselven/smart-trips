<?php include "partials/head.php" ?>
<?php

use Core\Helper; ?>
<?php include "partials/aside.php" ?>
<!-- Main Content -->
<div class="main-content">
  <form action="/dashboard/add/guides" class="card">
    <div class="card-header">
      <h4>Add New Guide</h4>
    </div>
    <div class="card-body">
      <div class="row">
      <div class="form-group col-6">
        <label>First Name</label>
        <input type="text" name="fname" class="form-control">
      </div>
      <div class="form-group col-6">
        <label>Last Name</label>
        <input type="text" name="lname" class="form-control">
      </div>
</div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Profile Photo</label>
        <input type="file" class="form-control">
      </div>
      <div class="form-group">
        <label class="d-block">Gender</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1">
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2">
          <label class="form-check-label" for="exampleRadios2">
            Female
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>Telephone</label>
        <input type="tel" class="form-control">
      </div>
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary mr-1" type="submit">Submit</button>
      <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
  </form>
</div>
<?php include "partials/footer.php" ?>