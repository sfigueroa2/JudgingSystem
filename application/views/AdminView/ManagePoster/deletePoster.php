<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Delete a Poster</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Fontawesome free core-->
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700" rel="stylesheet">
  </head>
<body>
  <div>
  <h1 class="display-3">Find a poster to Delete</h1>
  <p> </p>
</div>
  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/DeletePoster'); ?>
  <div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header"><h1>Search for a Poster</h1></div>
  <div class="card-body">
  <form>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Poster Number: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pnumber" class="form-control" placeholder="Poster # only" value=""/>
  </div>
    <input type="submit" name="snumber" class="btn btn-primary mb-2" value="Search">
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pemail" class="form-control" placeholder="someone@example.edu" value=""/>
  </div>
    <input type="submit" name="semail" class="btn btn-primary mb-2" value="Search">
  </div>
  </form>
</div>
</div>
</div>
</body>
</html>
