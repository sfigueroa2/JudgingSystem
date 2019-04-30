<html>
<head>
<title>Delete Posters</title>
</head>
<body>
  <?php if (empty($poster)) { ?>
  <CENTER><h3 style="color:black;">Poster Not on Record</h3></CENTER><br>
  <?php } ?>
  <?php echo validation_errors(); ?>
  <div class="container" style="margin-bottom:1.5rem">
  <div class="card">
  <div class="card-header"><h2>Search Results</h2></div>
  <div class="card-body">
    <table class="table table-striped">
      <thead>
     <tr>
      <td><strong>Action</strong></td>
      <td><strong>Poster</strong></td>
      <td><strong>Presenter</strong></td>
      <td><strong>Presenter Email</strong></td>
      <td><strong>Project Title</strong></td>
    </tr>
  </thead>
  <?php foreach ($poster as $p): ?>
    <tr>
      <td><a href="<?php echo site_url('AdminController/DeletePosterHelper/'.$p->PosterID."-".$p->SessionID); ?>" class="btn btn-primary">Delete</a>
        <td><?php echo $p->PosterID.$p->SessionID; ?></p></td>
        <td><?php echo $p->SFirst." ".$p->SLast; ?></p></td>
        <td><?php echo $p->SEmail; ?></p></td>
        <td><?php echo $p->Title; ?></p></td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
</div>
</div>
</div>
</body>
</html>
