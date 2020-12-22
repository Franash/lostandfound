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
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h3><b>FIND YOUR ITEM</b></h3>
        <hr>
        <form action="config/retrieve.php" method="post">
          <div class="form-group">
            <label for="form-username">Select Document type</label>
            <select class="form-control" name="doc_typ">
              <option value="National ID">National ID</option>
              <option value="Passport">Passport</option>
              <option value="Certificate">Certificate</option>
              <option value="Other Document">Other Document</option>
            </select>
          </div>
          <div class="form-group">
            <label for="form-username">Document Number</label>
            <input type="text" name="doc_no" required placeholder="Document number" class="form-username form-control" id="documentNumber">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right" name="search">Search</button>
          </div>
        </form>
      </div>
      <div class="col-sm">
        <?php //echo json_encode($foundRecord); ?>
      </div>
      <!-- <div class="col-sm"></div> -->
      <!-- modal here -->
      <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
              <h4 class="modal-title" id="myModalLabel">Nothing Found</h4>
            </div>
            <div class="modal-body">
              <p>Sorry, No record found matching your search.</p>
            </div>
            <div class="modal-footer">
              <a href="#" type="button" class="btn btn-primary" data-dismiss="modal">Ok</a>
            </div>
          </div>
        </div>
      </div>
      <!-- modal end -->
      <!-- another modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Found Item</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
              <button type="button" id="submit" class="btn btn-success success" data-dismiss="modal">Got It</button>
            </div>
          </div>
        </div>
      </div>'
      <!-- another modal ends here -->
    </div>
  </div>
  <script type="text/javascript" src="public/js/jquery-3.3.1.js" />
  </script>
  <script type="text/javascript" src="public/js/bootstrap.min.js" />
  </script>
</body>
</html>


