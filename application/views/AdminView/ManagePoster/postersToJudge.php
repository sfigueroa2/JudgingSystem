<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Symposium Sessions</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Fontawesome free core-->
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700" rel="stylesheet">

  </head>
  <body>

        <div class="container-fluid" style="margin-top:60px">
          <div class="container">
            <div class="container-fluid">
              <h1> Now listing posters from <span style="color:blue"><?php echo $session[0]['Session']; ?></span> </h1>
            </div>
            <p> </p>
            <div class="container">
            <div class="row">
              <div class="card-columns" style="margin-top:1rem">
                <div class="card border-danger">
                  <div class="card-header bg-danger text-white"><h3>Judged ZERO times</h3></div>
                  <div class="card-body">
                    <h4 class="card-title">Get judges to these first</h4>
                    <h5 class="card-text" style="font-size: 2em;">
                      <ul style="list-style-type:none">
                         <?php foreach($judgedzero as $zero){?>
                             <li><?php echo $zero['PosterID'].$zero['SessionID'];?></li>
                         <?php }?>
                      </ul>
                    </h5>
                  </div>
                </div>
                  <div class="card border-warning">
                    <div class="card-header bg-warning text-dark"><h3>Judged ONCE</h3></div>
                    <div class="card-body">
                      <h4 class="card-title">Send judges when ZERO is empty</h4>
                      <h5 class="card-text" style="font-size: 2em;">
                        <ul style="list-style-type:none">
                          <?php foreach($judgedonce as $one){?>
                              <li><?php echo $one['PosterID'].$one['SessionID'];?></li>
                          <?php }?>
                        </ul>
                      </h5>
                    </div>
                  </div>
                    <div class="card border-dark">
                      <div class="card-header bg-dark text-white"><h3>Judged TWICE</h3></div>
                      <div class="card-body">
                        <h4 class="card-title">Send Idle Judges as time allows</h4>
                        <h5 class="card-text" style="font-size: 2em;">
                          <ul style="list-style-type:none">
                            <?php foreach($judgedtwice as $two){?>
                                <li><?php echo $two['PosterID'].$two['SessionID'];?></li>
                            <?php }?>
                          </ul>
                        </h5>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </body>
</html>
