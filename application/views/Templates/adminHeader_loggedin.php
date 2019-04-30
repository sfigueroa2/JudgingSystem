<!DOCTYPE html>
<html>
        <head>

<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">

   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</head>
  <body>
    <?php
    if (isset($this->session->userdata['logged_inA'])) {
        $username = ($this->session->userdata['logged_inA']['AdminName']);
    }
    ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Symposium Judging System</a>
  <div class="collapse navbar-collapse ml-lg-0 ml-3" id="navbarcollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/AdminController/index">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/AdminController/SetSession">Sessions</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/AdminController/ManagePoster">Posters</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/AdminController/CreateJudge">Judges</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/AdminController/ManageArchive">Archive</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/ValidationController/logoutAdmin">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-uppercase" href="#"><?php echo $username ?></a>
      </li>
    </ul></div>
</nav>
<div class="container-fluid bg-white">
<div>
  <div class="row">
  <h3 class="col">Number of Posters: <span style="color:#ff8200"><?php echo $numPosters[0]['posters'];?></span> </h3>
  <h3 class="col">Total number of Judges: <span style="color:#ff8200"><?php echo $numJudges[0]['judges'];?></span> </h3>
  <h3 class="col">Current session: <span style="color:#ff8200"><?php echo $session[0]['Session'];?></span> </h3>
  </div>
</div>
</div>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


<!-- </body>
</html> -->
