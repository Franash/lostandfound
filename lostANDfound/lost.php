<?php
require 'config/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <title></title>
</head>
<body>
  <div style="margin-bottom: 15px; background-color: #080808;">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link btn" href="index.php" role="button">
          Find Item
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn" href="lost.php" role="button">Insert Item</a>
        </li>
        <!-- <li style="margin-top: 4px" class="nav-item">
          <a class="nav-link btn btn-sm" href="/departments">Department</a>
        </li>
        <li style="margin-top: 4px" class="nav-item pull-right">
          <a class="nav-link btn btn-sm" href="/logout">Sign Out</a>
        </li> -->
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm"></div>
      <div align="left" class="col-sm">
        <h3><b>LOST AND FOUND</b></h3>
        <hr>
        <form class="" action="config/insert.php" method="post">
          <div class="form-group">
            <label for="form-username">Select Document type</label>
            <select class="form-control" name="doc_typ" id="doc_typ">
              <option value="National ID">National ID</option>
              <option value="Passport">Passport</option>
              <option value="Certificate">Certificate</option>
              <option value="Other Document">Other Document</option>
            </select>
          </div>
          <div class="form-group">
            <label for="form-username">Document Number</label>
            <input type="text" name="doc_no" required placeholder="Document number" class="form-username form-control" id="doc_no">
          </div>
          <div class="form-group">
            <label for="form-username">Owner name</label>
            <input type="text" name="itm_own" required placeholder="Owner name" class="form-username form-control" id="itm_own">
          </div>
          <div class="form-group">
            <label for="form-username">Collector name</label>
            <input type="text" name="col_nm" required placeholder="Collector name" class="form-username form-control" id="col_nm">
          </div>
          <div class="form-group">
            <label for="form-username">Collector phone</label>
            <input type="tel" name="col_pn" required placeholder="Collector phone" class="form-username form-control" id="col_pn">
          </div>
          <div class="form-group">
            <label for="form-username">Date found</label>
            <input type="date" name="dat_c" required placeholder="Date found" class="form-username form-control" id="dat_c">
          </div>
          <div class="form-group">
            <label for="form-username">Collection point</label>
            <input type="text" name="col_pnt" required placeholder="Collection point" class="form-username form-control" id="col_pnt">
          </div>
          <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Save</button>
          </div>
        </form>
      </div>
      <div class="col-sm"></div>
    </div>
  </div>

  <script type="text/javascript" src="public/js/jquery-3.3.1.js" />
  </script>
  <script type="text/javascript" src="public/js/bootstrap.min.js" />
  </script>
</body>
</html>
