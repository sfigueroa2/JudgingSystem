<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Manage Administrators</title>
  </head>
  <body>
  <form method="POST" action="">
    </form>
  <div class="container">
  <div class="card border-secondary mb-3">
  <div class="card-header">
    <h1>Manage Administrators</h1></div>
    <div class="card-body">
<div class="row mb-3"><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/AdminList'" class="btn btn-primary col-md-3" >View Admin List</button>
<p class="col-9">View a list of all administrators</p></div>
<div class="row mb-3"><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/CreateAdmin'"class="btn btn-primary col-md-3" >Insert New Admin</button><p class="col-9">Add a new admin</p></div>
<div class="row mb-3"><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/DeleteAdmin'"class="btn btn-primary col-md-3" >Delete Admin</button><p class="col-9">Delete an admin</p></div>
</div></div>
</body>
</html>
