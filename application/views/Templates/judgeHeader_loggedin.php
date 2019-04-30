<html>
        <head>
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">


        </head>
        <body>
          <?php
          if (isset($this->session->userdata['logged_in'])) {
              $username = ($this->session->userdata['logged_in']['JudgeName']);
          }
          ?>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">Symposium Judging System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/PosterController/Poster">Posters</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/PosterController/JudgedPoster">My Scores</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/ValidationController/logout">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-uppercase" href="#"><?php echo $username ?></a>
      </li>
    </ul>
  </div>
</nav>
