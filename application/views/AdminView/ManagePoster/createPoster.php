<html>
<head>
  <title>Add New Posters</title>
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
      <h1 class="display-3">Add New Posters</h1>
      <p>Reload this page with <kbd>F5</kbd> after you make changes to update the numbers above.</p>
    </div>
<div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header"><h1>Add poster information</h1></div>
  <div class="card-body">
    <form method="post" action="<?php echo base_url() . "index.php/AdminController/CreatePoster"?>">
      <div class="form-group row">
        <label for="inputPoster#" class="col-sm-2 control-label text-right">Poster #</label>
        <div class="col-sm-3">
          <input type="text" id="did" name="did" class="form-control" id="inputPoster#" placeholder="Poster Number">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputSessionID" class="col-sm-2 control-label text-right">Session</label>
          <div class="col-sm-2">
          <select class="form-control" id="dsid" name="dsid">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPoster#" class="col-sm-2 control-label text-right">Submission #</label>
          <div class="col-sm-3">
            <input type="text" id="dnid" name="dnid" class="form-control" id="inputPoster#" placeholder="Poster Submission Number">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputJudgeCat" class="col-sm-2 control-label text-right">Judge Category</label>
            <div class="col-sm-4">
            <select class="form-control" id="djcategory" name="djcategory">
              <option>Arts & Humanities</option>
              <option>Computational Sciences</option>
              <option>Engineering & Applied Sciences</option>
              <option>Life Sciences</option>
              <option>Physical Sciences</option>
              <option>Social Sciences</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPTitle" class="col-sm-2 control-label text-right">Poster Title</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="3" placeholder="Project/Poster Title" id="dtitle" name="dtitle"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPFirst" class="col-sm-3 control-label text-right">Presenter First Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" placeholder="Presenter First Name" id="dfirst" name="dfirst">
            </div>
          </div>
              <div class="form-group row">
        <label for="inputPLast" class="col-sm-3 control-label text-right">Presenter Last Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPLast" placeholder="Presenter Last Name" id="dlast" name="dlast">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPEmail" class="col-sm-3 control-label text-right">Presenter Email</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" id="inputPEmail" placeholder="someone@somewhere.edu" id="demail" name="demail">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPFirst" class="col-sm-3 control-label text-right">Mentor Full Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPFirst" placeholder="Mentor First Name" id="dmentor" name="dmentor">
        </div>
      </div>
  <div class="form-group row">
    <label for="inputPEmail" class="col-sm-3 control-label text-right">Mentor Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputMEmail" placeholder="someone@somewhere.edu" id="dmemail" name=dmemail>
    </div>
  </div>
  <div class="form-group d-flex justify-content-center">
    <button type="submit" class="btn btn-primary btn-lg">Add Poster</button>
  </div>
</form>
  </div>
 </div>
</div>
</body>
</html>
