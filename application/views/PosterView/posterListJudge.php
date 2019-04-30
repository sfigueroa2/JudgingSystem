<!DOCTYPE html>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "45";
?>
<html lang="en">
  <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  </head>
  <body>
  <div class="container-fluid">
<h2>Now showing posters from<span style="color:#ff8200">
<?php
    if ($curr_session != 'N') {
            echo 'Session '.$curr_session; //  Displaying Selected Value
    }
    if ($curr_session == 'N') {
      echo 'No Currently Active Sessions.'; //  Displaying Selected Value
    }
?></span></h2>
</div>
<div class="container-fluid bg-white" style="margin:0,0,10">
<div class="row">
 <table class="table table-striped">
 <thead class="bg-primary text-white">
  <tr>
    <th scope="col" width="10%"><strong>Action</strong></th>
    <th scope="col" width="10%"><strong>Poster</strong></th>
    <th scope="col" width="15%"><strong>Author</strong></th>
    <th scope="col" width="15%"><strong>Category</strong></th>
    <th scope="col" width="55%"><strong>Title</strong></th>
 </tr>
</thead>
  <?php foreach($Posters as $Poster){?>
  <tr>
      <td scope="row"><a href="<?php echo site_url('PosterController/ScorePoster/'. $Poster->PosterID."-".$Poster->SessionID); ?>" class="btn btn-primary">Judge Poster</a></td>
      <td><?php echo $Poster->PosterID;?></td>
      <td><?php echo $Poster->SFirst." ".$Poster->SLast;?></td>
      <td><?php echo $Poster->JudgingCategory;?></td>
      <td><?php echo $Poster->Title;?></td>



   </tr>
  <?php }?>
</table></div></div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
