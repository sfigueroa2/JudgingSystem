<!DOCTYPE html>
<html>
<head>
<title>Delete Administrator</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Delete Administrator</h1><hr/>
<div id="menu">
<div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header">
<h3>Select an Administrator</h3></div>
<div class="card-body">
<!--====== Displaying Fetched Names from Database in Links ========-->
<ol>
<?php foreach ($Admins as $Admin): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showAdminName/" . $Admin->AdminName; ?>"><?php echo $Admin->AdminName; ?></a>
</li><?php endforeach; ?>
</ol>
</div></div></div></div>

<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_Admin as $Admin): ?>
  <div class="container" style="margin-bottom:1.5rem">
  <div class="card">
  <div class="card-header">
  <h3>Delete Judge</h3></div>
  <div class="card-body">
<h4>Administrator Details</h4>
<p><?php echo "Admin Name: ".$Admin->AdminName; ?></p>
<p><?php echo "Admin Password :".$Admin->AdminPass; ?></p>
<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/AdminController/DeleteAdmin/" . $Admin->AdminName; ?>">
<button class="btn btn-primary">Delete this Admin</button></a>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>
