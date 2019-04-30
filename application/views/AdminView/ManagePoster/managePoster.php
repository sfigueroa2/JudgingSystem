<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Manage Posters</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Fontawesome free core-->
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700" rel="stylesheet">
</head>
<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/index'); ?>
  <form method="POST" action="">
  </form>
  <div>
    <h1 class="display-3">Manage Posters</h1>
    <p>Reload this page with <kbd>F5</kbd> after you make changes to update the numbers above.</p>
  </div>
  <div class="container" style="margin-bottom:1.5rem">
  <div class="card" style="margin-bottom:1.5rem">
    <div class="card-header"><h1>Select an Action</h1></div>
    <div class="card-body">
      <div class="row" style="margin: 0rem .5rem 1.5rem">
          <a class="col btn btn-primary" href="https://judging.couri.utep.edu/index.php/AdminController/CreatePoster">ADD Poster</a>
          <p class="col-10">Add a new poster to a session</p>
        </div>
        <div class="row" style="margin: 0rem .5rem 1.5rem">
          <a class="col btn btn-primary" href="https://judging.couri.utep.edu/index.php/AdminController/ModifyPoster">EDIT Poster</a>
          <p class="col-10">EDIT a poster's info (e.g. change presenter)</p>
        </div>
        <div class="row" style="margin: 0rem .5rem 1.5rem">
          <a class="col btn btn-primary" href="https://judging.couri.utep.edu/index.php/AdminController/DeletePoster">DELETE Poster</a>
          <p class="col-10">DELETE a no-show poster/presenter</p>
        </div>
        <div class="row" style="margin: 0rem .5rem 1.5rem">
          <a class="col btn btn-primary" href="https://judging.couri.utep.edu/index.php/AdminController/PostersToJudge">Times Judged</a>
          <p class="col-10">VIEW Times a poster has been judged</p>
        </div>
    </div>
    </div>

  </div>
  </body>
  </html>
