<html>
<head>
<title>Modify Posters</title>
</head>
<body>
  <?php if (empty($poster)) { ?>
  <CENTER><h3 style="color:black;">Poster Not on Record</h3></CENTER><br>
  <?php } ?>
  <?php echo validation_errors(); ?>
  <div class="container" style="margin-bottom:1.5rem">
  <div class="card">
    <div class="card-header"><h2>Search Results</h2></div>
    <div class="card-body">
  <div id="detail">
    <?php foreach ($poster as $p): ?>
    <form method="post" action="<?php echo base_url() . "index.php/AdminController/ModifyPosterHelper"?>">
    <label id="hide">Poster Number: <?php echo $p->PosterID; ?></label>
    <input type="hidden" id="hide" name="pid" value="<?php echo $p->PosterID; ?>">

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Session ID: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="psid" class="form-control" value="<?php echo $p->SessionID; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Title: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="ptitle" class="form-control" value="<?php echo $p->Title; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Author First Name: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pfirst" class="form-control" value="<?php echo $p->SFirst; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Author Last Name: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="plast"  class="form-control" value="<?php echo $p->SLast; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Author Email: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pemail" class="form-control" value="<?php echo $p->SEmail; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Mentor: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pmentor" class="form-control" value="<?php echo $p->Mentor; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Mentor Email: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pcategory" class="form-control" value="<?php echo $p->MEmail; ?>">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Judging Category: </label>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="pmemail" class="form-control" value="<?php echo $p->JudgingCategory; ?>">
    </div>
    </div>

    <input type="submit" id="submit" name="dsubmit" class="btn btn-primary mb-2" value="Update">
    </div>
    </form>
    <?php endforeach; ?>
  </div>
    </div>
      </div>
</body>
</html>
