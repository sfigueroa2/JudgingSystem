<!DOCTYPE>
<html>
    <head>
    </head>
    <script>
    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");

    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");

        for (var j = 0; j < cols.length; j++)
            row.push(cols[j].innerText);

        csv.push(row.join(","));
    }
    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
</script>
<div class="container" style="margin-bottom:1.5rem">
  <div class="card" style="margin-bottom:1.5rem">
    <div class="card-header"><h1>Final Scores</h1></div>
    <div class="card-body">
      <div class="row" style="margin: 0rem .5rem 1.5rem">
        <button onclick="exportTableToCSV('finalScores.csv')" class="btn btn-primary">Export Final Scores</button>
        <p class="col-10">Click button to begin download.</p>
      </div>

<div class="container bg-white">
 <table class="table table-striped">
<thread>
       <tr>
        <th>Poster</th>
        <th>Presentor</th>
        <th>Mentor</th>
        <th>Judging Category</th>
        <th>Score</th>

    </tr>
  </thread>
    <?php foreach($finalscores as $fs){?>
        <tr>
        <td><?php echo $fs->PosterID.$fs->SessionID;?></td>
        <td><?php echo $fs->SFirst." ".$fs->SLast;?></td>
        <td><?php echo $fs->Mentor;?></td>
        <td><?php echo $fs->JudgingCategory;?></td>
        <td><?php echo $fs->Score;?></td>
        </tr>
     <?php }?>
   </table></div>
    </body>

</html>
