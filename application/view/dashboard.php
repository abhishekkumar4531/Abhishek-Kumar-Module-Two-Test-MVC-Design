<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Page</title>
  <?php include 'components/header.php' ?>
</head>
<body class="container">
  <h1 class="text-center p-2">Welcome to TODO game</h1>
  <div class="d-flex justify-content-between">
    <div class="w-50 ps-5 pe-5">
      <h5>Enter new item</h5>
      <div class="input-group">
          <input type="text" name="new_item" id="new_item" class="form-control" required>
          <button class="btn btn-primary" name="addButtom" id="addButton">Add</button>
        </div>
      <div class="markItem mt-5" id="display-data">
        <?php //include 'components/displayData.php' ?>
      </div>
      <!-- <div>
        <button class="marked btn btn-primary" name="marked" id="marked">Mars as done</button>
      </div> -->
    </div>
    <div class="w-50 p-1">
      <h3 class="text-center border border-2 mt-4 p-1"><span class="bi bi-check2-all"></span> Added list-items</h3>
      <div id="display-marked-data" class="mt-5">
        <?php //include 'components/displayMarkedData.php' ?>
      </div>
    </div>
  </div>
</body>
</html>
