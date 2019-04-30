<html>
<head>
<title>Symposium Dashboard</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php echo validation_errors(); ?>
  <?php// echo form_open('AdminController/index'); ?>


<div class="container-fluid">
  <div class="container-fluid">
    <h1 class="display-3">Manage System Dashboard</h1>
    <p>Reload this page with <kbd>F5</kbd> after you make changes to update the numbers above.</p>
  </div>
</div>
  <!-- <form method="POST" action="">
  </form> -->
  <div class="container">
  <div class="card border-secondary mb-3">
  <div class="card-header">
  <h3>Upload New Data</h3></div>
  <div class="card-body">
  <p><button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target="#cleardata">Clear Database</button>
  <?php echo "Prepare backend to accept new data by <strong>deleting</strong> existing data. Totals should be zero."?></p>
  <p><button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target="#importposters">Import Posters</button>
  <?php echo "Add list of posters (incl judge category, presenter & Mentor)"?></p>
  <p><button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target="#importjudges">Import Judges</button>
  <?php echo "Add list of pre-registered judges"?></p>
  </div></div></div>

  <div class="container">
  <div class="card border-secondary mb-3">
  <div class="card-header">
  <h3>Other Functions</h3></div>
  <div class="card-body">
    <p><a class="btn btn-primary col-sm-3" href="https://judging.couri.utep.edu/index.php/AdminController/SetSession">Manage Sessions</a>
    <?php echo "Change session, add/delete posters"?></p>
    <p><a class="btn btn-primary col-sm-3" href="https://judging.couri.utep.edu/index.php/AdminController/CreateJudge">Manage Judges</a>
    <?php echo "Add new judges, view posters to be judged"?></p>
    <p><a class="btn btn-primary col-sm-3" href="https://judging.couri.utep.edu/index.php/AdminController/ManageArchive">Archive Data</a>
    <?php echo "Export Symposium data: Scores & Judges"?></p>
    <p><a class="btn btn-primary col-sm-3" href="https://judging.couri.utep.edu/index.php/AdminController/ManagePoster">Manage Posters</a>
    <?php echo "Add new poster, edit/delete existing poser, and view poster times judged"?></p>
    <p><a class="btn btn-primary col-sm-3" href="https://judging.couri.utep.edu/index.php/AdminController/ManageAdmin">Manage Administrators</a>
    <?php echo "View list of admin, insert/delete admin"?></p>

  </div></div></div>

  <!-- Clear Data Modal -->
  <div class="modal fade" id="cleardata" tabindex="-1" role="dialog" aria-labelledby="cleardataLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="cleardataLabel">Clear Data for New Symposium</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h3>Are you sure you want to clear all data?</h3>
</div>
<div class="modal-footer">
<?php echo validation_errors(); ?>
<?php echo form_open('AdminController/DeleteTables'); ?>
<input type="submit" name="no" value="NO, Keep current data" class="btn btn-danger" data-dismiss="modal">
<input type="submit" name="yes" value="YES, Clear all data" class="btn btn-primary">
</form></div>
</div>
</div>
</div>
<!-- End Clear Data Modal -->

<!-- Import posters Modal -->
<div class="modal fade" id="importposters" tabindex="-1" role="dialog" aria-labelledby="importpostersLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importpostersLabel">Import Posters</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                     <h2>Import CSV File</h2>
                     <form id="upload_csv" method="post" enctype="multipart/form-data">
                       <div class="input-row">
                            <input type="file" class="form-control-file" name="file" id="file" accept=".csv">
                          </div>
                          <div class="modal-footer">
                               <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />
                          </div>
                     </form>
                </div>
    </div>
  </div>
</div>
<!--Script-->
<script>
     $(document).ready(function(){
          $('#upload_csv').on("submit", function(e){
               e.preventDefault(); //form will not submitted
               $.ajax({
                    url:"importPostersHelper",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,          // The content type used when sending data to the server.
                    cache:false,                // To unable request pages to be cached
                    processData:false,          // To send DOMDocument or non processed data file it is set to false
                    success: function(data){

                      			$("#response").attr("class", "");
                      			$("#response").html("");
                      			var fileType = ".csv";
                      			var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
                      					+ fileType + ")$");
                      			if (!regex.test($("#file").val().toLowerCase())) {
                      				$("#response").addClass("error");
                      				$("#response").addClass("display-block");
                      				$("#response").html(
                      						"Invalid File. Upload : <b>" + fileType
                      								+ "</b> Files.");
                      				return false;
                      			}
                            location.reload();
                    }
               })
          });
     });
</script>

<!-- End Import Posters Modal -->

<!-- Import Judges Modal -->
<div class="modal fade" id="importjudges" tabindex="-1" role="dialog" aria-labelledby="importjudgesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importjudgesLabel">Import Judges</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                     <h2>Import CSV File</h2>
                     <form id="upload_csv_judges" method="post" enctype="multipart/form-data">
                       <div class="input-row">
                            <input type="file" class="form-control-file" name="file" id="file" accept=".csv">
                          </div>
                          <div class="modal-footer">
                               <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />
                          </div>
                     </form>
                </div>
    </div>
  </div>
</div>
<!--Script-->
<script>
     $(document).ready(function(){
          $('#upload_csv_judges').on("submit", function(e){
               e.preventDefault(); //form will not submitted
               $.ajax({
                    url:"importJudgesHelper",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,          // The content type used when sending data to the server.
                    cache:false,                // To unable request pages to be cached
                    processData:false,          // To send DOMDocument or non processed data file it is set to false
                    success: function(data){

                      			$("#response").attr("class", "");
                      			$("#response").html("");
                      			var fileType = ".csv";
                      			var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
                      					+ fileType + ")$");
                      			if (!regex.test($("#file").val().toLowerCase())) {
                      				$("#response").addClass("error");
                      				$("#response").addClass("display-block");
                      				$("#response").html(
                      						"Invalid File. Upload : <b>" + fileType
                      								+ "</b> Files.");
                      				return false;
                      			}
                            window.location.href = 'AdminController/index';
                      			return true;
                    }
               })
          });
     });
</script>
<!-- End Modal -->

    <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>
