<head>
  <title>Manage Judges</title>
  <link rel = "stylesheet" type = "text/css"
     href = "<?php echo base_url(); ?>css/bootstrap.css">
  <link rel = "stylesheet" type = "text/css"
     href = "<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel = "stylesheet" type = "text/css"
     href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">
</head>
<?php echo validation_errors(); ?>
  <div>
    <h1 class="display-3">Manage Judges</h1>
    <p>Reload this page with <kbd>F5</kbd> after you make changes to update the numbers above.</p>
  </div>
</div>
</div>
<div class="container" style="margin-bottom:1.5rem">
<div class="card" style="margin-bottom:1.5rem">
  <div class="card-header"><h1>Add On-Site Judges</h1></div>
  <div class="card-body">
    <form method="post" action="<?php echo base_url() . "index.php/AdminController/CreateJudge"?>">
      <div class="form-group row">
        <label for="inputPFirst" class="col-sm-2 control-label text-right">User Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="jname" name="jname" placeholder="Judge Username">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPFirst" class="col-sm-2 control-label text-right">Password</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="jass" name="jpass" placeholder="Judge Password">
        </div>
      </div>
          <div class="form-group row">
            <label for="inputJFirst" class="col-sm-2 control-label text-right">First Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="jfirst" name="jfirst" placeholder="Judge's First Name">
            </div>
          </div>
              <div class="form-group row">
        <label for="inputJLast" class="col-sm-2 control-label text-right">Last Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="jlast" name="jlast" placeholder="Judge's Last Name">
        </div>
      </div>
  <div class="form-group d-flex justify-content-center">
    <button type="submit" class="btn btn-primary btn-lg">Add New Judge</button>
  </div>
</form>
  </div>
 </div>
 <div class="row" style="margin: 0rem .5rem 1.5rem">
    <a class="col btn btn-primary" href="https://judging.couri.utep.edu/index.php/AdminController/JudgeList">View Judge List</a>
    <p class="col-10">Full list of Judges</p>
  </div>
  <div class="row" style="margin: 0rem .5rem 1.5rem">
     <a class="col btn btn-primary" href="https://judging.couri.utep.edu/index.php/AdminController/DeleteJudge">DELETE Judge</a>
     <p class="col-10">Search to delete a particular Judge</p>
   </div>
</div>
