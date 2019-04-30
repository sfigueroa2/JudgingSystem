<!DOCTYPE html>
<html>
<head>
<title>Delete Judge</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Delete Judge</h1><hr/>
<div id="menu">
<div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header">
<h3>Select a Judge</h3></div>
<div class="card-body">
<!--====== Displaying Fetched Names from Database in Links ========-->
<ol>
<?php foreach ($Judges as $Judge): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showJudgeName/" . $Judge->JudgeName; ?>"><?php echo $Judge->JudgeName; ?></a>
</li><?php endforeach; ?>
</ol>
</div></div></div></div>

<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_Judge as $Judge): ?>
  <div class="container" style="margin-bottom:1.5rem">
  <div class="card">
    <div class="card-header">
  <h3>Delete Selected Judge</h3></div>
  <div class="card-body">
<p><b>Administrator Details</b></p>
<p><?php echo "Admin Name: ".$Judge->JudgeName; ?></p>
<p><?php echo "Admin Password :".$Judge->JudgePass; ?></p>
<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/AdminController/DeleteJudge/" . $Judge->JudgeName; ?>">
<button class="btn btn-primary">Delete Judge</button></a>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>
