<html>
<head>
<title>Set Active Session</title>
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">

</head>
<body>
<?php echo validation_errors(); ?>
<div>
  <h1 class="display-3">Manage Sessions</h1>
  <p>Reload this page with <kbd>F5</kbd> after you make changes to update the numbers above.</p>
</div>
<form method="post" action="<?php echo base_url()?>index.php/AdminController/SetSession">
<div class="container" style="margin-bottom:1.5rem">
    <div class="card">
      <div class="card-header"><h1>Change Current Session</h1></div>
      <div class="card-body">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-outline-primary"><input type="radio" name="session" value="A">A</label>
        <label class="btn btn-outline-primary"><input type="radio" name="session" value="B">B</label>
        <label class="btn btn-outline-primary"><input type="radio" name="session" value="C">C</label>
        <label class="btn btn-outline-primary"><input type="radio" name="session" value="D">D</label>
        <label class="btn btn-outline-primary"><input type="radio" name="session" value="N">Sessions Closed</label>
        </div>
        <input type="submit" name="submit" value="Set Session"  class="btn btn-primary" style="margin-left:2rem"/>
      </div>
    </div>
</div>
</form>
<div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header"><h2>Other Functions</h2></div>
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
      <p class="col-10">List posters and times judged from least to most</p>
    </div>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
  </html>
