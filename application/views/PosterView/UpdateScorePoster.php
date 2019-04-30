<html>
<?php echo validation_errors(); ?>
<div class="container-fluid" style="margin-top:60px">
<div class="container-fluid">
  <h1> Now <span style="color:#ff8200">EDITING SCORES</span> for poster <span style="color:#ff8200"><?php echo $PosterID.$SessionID;?></span> </h1>
  <div>
    <p><strong>Presenter: </strong><?php echo $posterinfo[0]['SFirst']." ".$posterinfo[0]['SLast'];?></p>
    <p><strong>Judging Category: </strong><?php echo $posterinfo[0]['JudgingCategory'];?></p>
    <p><strong>Title: </strong><?php echo $posterinfo[0]['Title'];?></p>
  </div>
</div>
</div>
<?php echo form_open('PosterController/UpdateScorePoster/'.$PosterID."-".$SessionID);?>
    <label class=""><input type="hidden" name="PosterID" value="<?= $PosterID ?>" >
      <label class=""><input type="hidden" name="JudgeID" value="<?= $JudgeID ?>" >
        <label class=""><input type="hidden" name="SessionID" value="<?= $SessionID ?>" >

    <div class="container" style="margin-top:20px">

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter clearly places the project in appropriate scholarly context.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="1" <?php echo ($scores[0]['Criteria1'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="2" <?php echo ($scores[0]['Criteria1'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="3" <?php echo ($scores[0]['Criteria1'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="4" <?php echo ($scores[0]['Criteria1'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter acknowledges the conceptual and methodological foundation provided by previous work.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="1" <?php echo ($scores[0]['Criteria2'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="2" <?php echo ($scores[0]['Criteria2'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="3" <?php echo ($scores[0]['Criteria2'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="4" <?php echo ($scores[0]['Criteria2'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter effectively communicates the significance of the project and contribution to the field.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="1" <?php echo ($scores[0]['Criteria3'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="2" <?php echo ($scores[0]['Criteria3'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="3" <?php echo ($scores[0]['Criteria3'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="4" <?php echo ($scores[0]['Criteria3'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>
    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter clearly articulates the research question or creative objective.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="1" <?php echo ($scores[0]['Criteria4'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="2" <?php echo ($scores[0]['Criteria4'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="3" <?php echo ($scores[0]['Criteria4'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="4" <?php echo ($scores[0]['Criteria4'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter successfully conveys the originality or innovation in the approach.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="1" <?php echo ($scores[0]['Criteria5'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="2" <?php echo ($scores[0]['Criteria5'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="3" <?php echo ($scores[0]['Criteria5'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="4" <?php echo ($scores[0]['Criteria5'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">The research question or creative objective follows logically from the previous work cited.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="1" <?php echo ($scores[0]['Criteria6'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="2" <?php echo ($scores[0]['Criteria6'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="3" <?php echo ($scores[0]['Criteria6'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="4" <?php echo ($scores[0]['Criteria6'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">The presenter clearly explains the methods and links methods to the project objective. </div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="1" <?php echo ($scores[0]['Criteria7'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="2" <?php echo ($scores[0]['Criteria7'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="3" <?php echo ($scores[0]['Criteria7'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="4" <?php echo ($scores[0]['Criteria7'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>
    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter effectively communicates the project progress and results.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="1" <?php echo ($scores[0]['Criteria8'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="2" <?php echo ($scores[0]['Criteria8'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="3" <?php echo ($scores[0]['Criteria8'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="4" <?php echo ($scores[0]['Criteria8'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>
    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter acknowledges limitations of the methods used.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="1" <?php echo ($scores[0]['Criteria9'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="2" <?php echo ($scores[0]['Criteria9'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="3" <?php echo ($scores[0]['Criteria9'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="4" <?php echo ($scores[0]['Criteria9'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>
    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presentation is structured, organized and flows logically.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="1" <?php echo ($scores[0]['Criteria10'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="2" <?php echo ($scores[0]['Criteria10'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="3" <?php echo ($scores[0]['Criteria10'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="4" <?php echo ($scores[0]['Criteria10'] =='4')?'checked':'' ?>/>Outstanding</label>
    </div>
    </div>

    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter has command of the topic and can easily answer questions.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="1" <?php echo ($scores[0]['Criteria11'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="2" <?php echo ($scores[0]['Criteria11'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="3" <?php echo ($scores[0]['Criteria11'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="4" <?php echo ($scores[0]['Criteria11'] =='4')?'checked':'' ?>/>Outstanding</label>
  </div>
  </div>
    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presentation materials, performance or visuals are relevant and of professional quality. </div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="1" <?php echo ($scores[0]['Criteria12'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="2" <?php echo ($scores[0]['Criteria12'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="3" <?php echo ($scores[0]['Criteria12'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="4" <?php echo ($scores[0]['Criteria12'] =='4')?'checked':'' ?>/>Outstanding</label>
  </div>
  </div>
    <div class="card" style="margin-bottom:1rem">
    <div class="card-header text-white" style="background:#0A2C5A;">Presenter is clear, enthusiastic, and effectively engages the audience.</div>
    <div class="card-body">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="1" <?php echo ($scores[0]['Criteria13'] =='1')?'checked':'' ?>/>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="2" <?php echo ($scores[0]['Criteria13'] =='2')?'checked':'' ?>/>Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="3" <?php echo ($scores[0]['Criteria13'] =='3')?'checked':'' ?>/>Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="4" <?php echo ($scores[0]['Criteria13'] =='4')?'checked':'' ?>/>Outstanding</label>
  </div>
  </div>
  </div>
  <div class="container" style="margin-bottom:1rem">
  <div>
    <?php echo "Comments:"; ?>
    <input type="input" id="comment" name="Comments" style="width: 30em;" value="<?php echo $scores[0]['Comments'] ?>" /><br />
  </div>
    <input type="submit" name="submit" value="Submit Scores" class="btn btn-primary"/>
  </div>
</form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>
