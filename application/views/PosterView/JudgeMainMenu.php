<html>
<head>
<title>Main Menu</title>
</head>
<body>
  <?php echo validation_errors(); ?>
<?php //echo "Judge ID: ".$JudgeID; ?>
<br>
  <div class="container-fluid">
<h2>Now showing <span style="color:#ff8200">YOUR JUDGED POSTERS</span>
</div>
<div class="container bg-white">
<div class="row">
 <table class="table table-striped">
 <thead>
  <tr>
    <th scope="col" width="10%"><strong>Action</strong></th>
    <th scope="col" width="10%"><strong>Poster ID</strong></th>
    <th scope="col" width="10%"><strong>Session ID</strong></th>
    <th scope="col" width="15%"><strong>Author</strong></th>
    <th scope="col" width="15%"><strong>Judging Category</strong></th>
    <th scope="col" width="65%"><strong>Title</strong></th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($Poster as $Poster_item): ?>
 <tr>
   <td><a href="<?php echo site_url('PosterController/UpdateScorePoster/'.$Poster_item->PosterID."-".$Poster_item->SessionID); ?>" class="btn btn-primary">Change Scores</a>
   <td><?php echo $Poster_item->PosterID;?></td>
   <td><?php echo $Poster_item->SessionID;?></td>
   <td><?php echo $Poster_item->SFirst." ".$Poster_item->SLast;?></td>
   <td><?php echo $Poster_item->JudgingCategory;?></td>
   <td><?php echo $Poster_item->Title;?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table></div></div>
</body>
</html>
