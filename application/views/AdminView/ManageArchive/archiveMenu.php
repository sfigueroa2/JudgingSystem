<html>
<head>
<title>Symposium Dashboard</title>
</head>
<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/ArchiveMenu'); ?>
  <div>
    <h1 class="display-3">Archive Data</h1>
    <p>Do this after every symposium to keep data for later analysis/records.</p>
  </div>
  <form method="POST" action="">
  </form>
  <div class="container" style="margin-bottom:1.5rem">
    <div class="card" style="margin-bottom:1.5rem">
      <div class="card-header"><h1>Select an Action</h1></div>
      <div class="card-body">
        <div class="row" style="margin: 0rem .5rem 1.5rem">
          <button class="col btn btn-primary" type="submit" onclick="location.href='<?php echo base_url();?>index.php/AdminController/finalScores'">Final Scores</button>
          <p class="col-10">Export CSV of calculated scores to determine winners</p>
        </div>
        <div class="row" style="margin: 0rem .5rem 1.5rem">
          <button class="col btn btn-primary" type="submit" onclick="location.href='<?php echo base_url();?>index.php/AdminController/rawScores'">Raw Scores</button>
          <p class="col-10">Export a CSV of raw scores from the rubric (before calculations).</p>
        </div>
        <div class="row" style="margin: 0rem .5rem 1.5rem">
          <button class="col btn btn-primary" type="submit" onclick="location.href='<?php echo base_url();?>index.php/AdminController/JudgeScoreTimes'">Judges</button>
          <p class="col-10">Export a list of judges and number of times judged for reward letters.</p>
        </div>
      </div>
    </div>
</div>

</body>
