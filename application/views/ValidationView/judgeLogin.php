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
      <li class="nav-item">
        <a class="nav-link" href="https://judging.couri.utep.edu/index.php/ValidationController/AdminIndex">Organizers</a>
      </li>
    </ul>
  </div>
</nav>

<?php echo validation_errors(); ?>
<?php echo form_open('ValidationController/index'); ?>

<form class="form-signin">
<img class="mb-4" src="/images/COURI_Color_200.png" alt="COURI Logo" height="150">
<h1 class="h2 mb-3 font-weight-normal">Judges Login</h1>
<h4>Username</h4>
<input type="text" name="username" value="" oninvalid="alert('Username is required.')" required/>

<h4>Password</h4>
<input type="text" name="password" value="" oninvalid="alert('Password is required.')" required />
<p> </p>
<div><input id="btn_login" name="btn_login" type="Submit" value="Login" class="btn btn-primary btn-lg" /></div>
</form>

</body>
</html>
