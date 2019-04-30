
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Judge List</title>
  </head>
  <body>

<h1>Judges List</h1><hr/>
<div class="container bg-white">
 <table class="table table-striped">
 <thead>
 <tr>
   <th><strong>Judge ID</strong></th>
   <th><strong>Judge Name</strong></th>
   <th><strong>Judge Password</strong></th>
 </tr>
</thead>
  <?php foreach($Judges as $Judge){?>
  <tr>
      <td scope="row"><?php echo $Judge->JudgeID;?></td>
      <td scope="row"><?php echo $Judge->JudgeName;?></td>
      <td scope="row"><?php echo $Judge->JudgePass;?></td>

   </tr>
  <?php }?>
</table>
  </div>

</body>
</html>
