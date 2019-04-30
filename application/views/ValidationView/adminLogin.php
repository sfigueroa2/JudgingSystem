<html>
<head>
<title>Symposium Judging System</title>
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/signin.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">Symposium Judging System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://judging.couri.utep.edu/index.php/ValidationController/index">Judges</a>
      </li>
    </ul>
  </div>
</nav>

<?php echo validation_errors(); ?>
<?php echo form_open('ValidationController/AdminIndex'); ?>
<form class="form-signin">
<img class="mb-4" src="/images/COURI_Color_200.png" alt="COURI Logo" height="150">
<h1 class="h3 mb-3 font-weight-normal">Organizer sign in</h1>
<p><input type="text" name="usernameA" value="" placeholder="Username" oninvalid="alert('Username is required.')" required/>
<p><input type="text" name="passwordA" value="" placeholder="ID" oninvalid="alert('Password is required.')" required/>

<p> </p>
<div><input id="btn_loginA" name="btn_loginA" type="Submit" value="Sign in" class="btn btn-primary btn-lg"/></div>
<br />
</form>

</body>
</html>
