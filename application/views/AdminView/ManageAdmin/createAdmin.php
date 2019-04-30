<html>
<head>
<title>Insert New Administrator</title>
</head>
<body>

<div id="container">
<?php echo form_open('AdminController/CreateAdmin'); ?>
<h1>Insert New Administrator</h1><hr/>

<?php if (isset($message)) { ?>
<CENTER><h3 style="color:black;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<div class="container" style="margin-bottom:1.5rem">
  <div class="card" style="margin-bottom:1.5rem">
    <div class="card-header"><h1>Add New Admin</h1></div>
  <div class="card-body">
  <div class="form-group row">

    <label for="inputJudgeID" class="col-sm-2 control-label text-right">Admin Name</label><?php echo form_error('aname'); ?><br />
<div class="col-sm-5">
<?php echo form_input(array('id' => 'aname', 'class'=>'form-control','name' => 'aname')); ?><br />
</div></div>
<div class="form-group row">
<label for="inputJudgeID" class="col-sm-2 control-label text-right">Admin Password</label><?php echo form_error('apass'); ?><br />
<div class="col-sm-5">
<?php echo form_input(array('id' => 'apass', 'class'=>'form-control', 'name' => 'apass')); ?><br />
</div></div>
<div class="form-group d-flex justify-content-center">
<?php echo form_submit(array('id' => 'submit','class' =>'btn btn-primary', 'value' => 'Submit')); ?>
</div>
</div>

<?php echo form_close(); ?><br/>
</div>
</div>
</div>
</body>
</html>
