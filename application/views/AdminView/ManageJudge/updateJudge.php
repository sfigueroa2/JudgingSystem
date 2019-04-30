<html>
<head>
<title>Update Judge</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Judge</h1><hr/>
<div id="menu">
<div class="container" style="margin-bottom:1.5rem">
<div class="card">
  <div class="card-header">
<h3>Click On a Judge</h3></div>
<div class="card-body">
<!-- Fetching Names Of All Students From Database -->
<ol>
<?php foreach ($Judges as $Judge): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showJudgeNameU/" . $Judge->JudgeName; ?>"><?php echo $Judge->JudgeName; ?></a></li>
<?php endforeach; ?>
</ol>
</div></div></div></div>
<div id="detail" class="container bg-secondary mb-3">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_Judge as $Judge): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/AdminController/UpdateJudge"?>">
<label id="dname">Username :</label>
<input type="text" id="dname" name="dname" value="<?php echo $Judge->JudgeName; ?>">
<label>Password :</label>
<input type="text" id="jpass" name="jpass" value="<?php echo $Judge->JudgePass; ?>">
<label>First Name :</label>
<input type="text" id="jfirst" name="jfirst" value="<?php echo $Judge->JFirst; ?>">
<label>Last Name :</label>
<input type="text" id="jlast" name="jlast" value="<?php echo $Judge->JFirst; ?>">
<input type="submit" id="submit" name="dsubmit" class="btn btn-primary" value="Update">
</form>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>
