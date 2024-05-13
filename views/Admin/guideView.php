<?php include "partials/head.php" ?>
<?php
use Helpers\Helper; ?>
<?php include "partials/aside.php" ?>
<!-- Main Content -->
<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="display:flex;justify-content:space-between">
          <h4><b class="btn btn-success"><i class="bi bi-plus"></i>Add Partner</b></h4>
          <div class="card-header-form">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th class="text-center">
                  <div class="custom-checkbox custom-checkbox-table custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                  </div>
                </th>
                <th>ID</th>
                <th>Name</th>
                <th>Bio</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Actions</th>
              </tr>
              <?php
              if (!empty($guides)) {
                foreach ($guides as $guide) {
                  echo "<tr>";
                  echo '<td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>';
                  echo "<td>{$guide['guide_id']}</td>";
                  echo "<td>{$guide['Name']}</td>";
                  echo "<td>{$guide['BIO']}</td>";
                  echo "<td>{$guide['phone_no']}</td>";
                  echo "<td>{$guide['Address']}</td>";
                  echo "<td>{$guide['Email']}</td>";
                  echo '<td><a href="#" class="btn btn-outline-primary">Details</a></td>';
                  echo "</tr>";
                }
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "partials/footer.php" ?>