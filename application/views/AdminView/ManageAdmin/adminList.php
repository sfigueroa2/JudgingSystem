<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Administrator List</title>
  </head>
  <body>
<h1>Administrator List</h1><hr/>
<div class="container bg-white">
 <table class="table table-striped">
  <thead>
  <tr>
   <th><strong>Admin Id</strong></th>
   <th><strong>Admin Name</strong></th>

 </tr></thead>
  <?php foreach($Admins as $Admin){?>
  <tr>
      <td scope="row"><?php echo $Admin->AdminID;?></td>
      <td><?php echo $Admin->AdminName;?></td>

   </tr>
  <?php }?>
</table></div>
</body>
</html>
