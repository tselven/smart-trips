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
                <th>Title</th>
                <th>Slug</th>
                <th>Tags</th>
                <th>Author</th>
                <th>Created At</th>
                <th colspan="2">Actions</th>
              </tr>
              <?php
              if (!empty($articles)) {
                foreach ($articles as $article) {
                  echo "<tr>";
                  echo '<td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>';
                  echo "<td>{$article['article_id']}</td>";
                  echo "<td>{$article['title']}</td>";
                  echo "<td>{$article['slug']}</td>";
                  echo "<td>{$article['tags']}</td>";
                  echo "<td>{$article['author']}</td>";
                  echo "<td>{$article['created_at']}</td>";
                  echo '<td><a href="#" class="btn btn-outline-primary">Update</a></td>';
                  echo '<td><a href="#" class="btn btn-outline-danger">Delete</a></td>';
                  echo "</tr>";
                }
              }else{
                echo "<tr><td colspan='8'><h4>You have no articles</h4></td></tr>";
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "partials/footer.php" ?>