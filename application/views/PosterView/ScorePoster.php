<html>
<?php echo validation_errors(); ?>
<?php echo form_open('PosterController/ScorePoster/'.$PosterID."-".$SessionID);?>
<div class="container-fluid" style="margin-top:60px">
<div class="container-fluid">
  <h1> Now judging poster <span style="color:#ff8200"><?php echo $PosterID.$SessionID;?></span> </h1>
  <div>
    <p><strong>Presenter: </strong><?php echo $posterinfo[0]['SFirst']." ".$posterinfo[0]['SLast'];?></p>
    <p><strong>Judging Category: </strong><?php echo $posterinfo[0]['JudgingCategory'];?></p>
    <p><strong>Title: </strong><?php echo $posterinfo[0]['Title'];?></p>
  </div>
</div>
</div>
<form>
<div class="container" style="margin-top:20px">
  <input type="hidden" name="PosterID" value="<?= $PosterID ?>" >
  <input type="hidden" name="JudgeID" value="<?= $JudgeID ?>" >
  <input type="hidden" name="SessionID" value="<?= $SessionID ?>" >
  <div class="card" style="margin-bottom:1rem">
    <div class="card-header bg-dark text-white">1. Presenter clearly places the project in appropriate scholarly context.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="1" oninvalid="alert('Response for Question 1 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria1" value="4">Outstanding</label>
    </div>
  </div>
  </div>
  <div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">2 Presenter acknowledges the conceptual and methodological foundation provided by previous work.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="1" oninvalid="alert('Response for Question 2 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria2" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">3. Presenter effectively communicates the significance of the project and contribution to the field.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="1" oninvalid="alert('Response for Question 3 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria3" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">4. Presenter clearly articulates the research question or creative objective.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="1" oninvalid="alert('Response for Question 4 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria4" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">5. Presenter successfully conveys the originality or innovation in the approach.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="1" oninvalid="alert('Response for Question 5 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria5" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">6. The research question or creative objective follows logically from the previous work cited.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="1" oninvalid="alert('Response for Question 6 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria6" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">7. The presenter clearly explains the methods and links methods to the project objective. </div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="1" oninvalid="alert('Response for Question 7 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria7" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">8. Presenter effectively communicates the project progress and results.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="1" oninvalid="alert('Response for Question 8 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria8" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">9. Presenter acknowledges limitations of the methods used.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="1" oninvalid="alert('Response for Question 9 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria9" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">10. Presentation is structured, organized and flows logically.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="1" oninvalid="alert('Response for Question 10 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria10" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">11. Presenter has command of the topic and can easily answer questions.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="1" oninvalid="alert('Response for Question 11 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria11" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">12. Presentation materials, performance or visuals are relevant and of professional quality. </div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="1" oninvalid="alert('Response for Question 12 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria12" value="4">Outstanding</label>
    </div>
  </div>
</div>
<div class="card" style="margin-bottom:1rem">
  <div class="card-header bg-dark text-white">13. Presenter is clear, enthusiastic, and effectively engages the audience.</div>
  <div class="card-body">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="1" oninvalid="alert('Response for Question 13 is required.')" required>Needs Improvement</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="2">Satisfactory</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="3">Very Good</label>
    <label class="btn btn-outline-primary"><input type="radio" name="Criteria13" value="4">Outstanding</label>
    </div>
  </div>
</div>
</div></div>
<div class="container" style="margin-bottom:1rem">
  <div class="form-group">
    <?php echo "Comments:"; ?>
    <input class="form-control" type="input" rows="5" id="comment" name="Comments" />
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
