<html>
<head>
<title>Update Administrators</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Administrators</h1><hr/>
<div id="menu">
<div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header">
<h3>Click On an Admin</h3></div>
<div class="card-body">
<!-- Fetching Names Of All Students From Database -->
<ol>
<?php foreach ($Admins as $Admin): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showAdminNameU/" . $Admin->AdminName; ?>"><?php echo $Admin->AdminName; ?></a></li>
<?php endforeach; ?>
</ol>
</div></div></div></div>

<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_Admin as $Admin): ?>
  <div class="container" style="margin-bottom:1.5rem">
  <div class="card">
    <div class="card-header">
  <h3>Update Field</h3></div>
  <div class="card-body">
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/AdminController/UpdateAdmin"?>">
<input type="hidden" id="did" name="did" value="<?php echo $Admin->AdminID; ?>">
<label>Name :</label>
<input type="text" id="aname" name="aname" value="<?php echo $Admin->AdminName; ?>">
<label>Password :</label>
<input type="text" id="apass" name="apass" value="<?php echo $Admin->AdminPass; ?>">
<input type="submit" id="submit" class="btn btn-primary" name="dsubmit" value="Update">
</div>
</form>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>
