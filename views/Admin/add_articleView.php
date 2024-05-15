<?php include "partials/head.php" ?>
<?php

use Core\Helper; ?>
<?php include "partials/aside.php" ?>
<!-- Main Content -->
<div class="main-content">
  <form action="<?php Helper::route('/add/article') ?>" method="POST" class="card">
    <div class="card-header">
      <h4>Add New Article</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Text</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control">
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
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
            Radio 1
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
          <label class="form-check-label" for="exampleRadios2">
            Radio 2
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Search</label>
        <input type="search" class="form-control">
      </div>
      <div class="form-group">
        <label>Tel</label>
        <input type="tel" class="form-control">
      </div>
      <div class="form-group">
        <label>Time</label>
        <input type="time" class="form-control">
      </div>
      <div class="form-group">
        <label>Url</label>
        <input type="url" class="form-control">
      </div>
      <div class="form-group mb-0">
        <label>Week</label>
        <input type="week" class="form-control">
      </div>
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary mr-1" type="submit">Submit</button>
      <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
  </form>
</div>
<?php include "partials/footer.php" ?>