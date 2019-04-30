<!DOCTYPE>
<html>
    <head>
    <link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">

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
    <div class="card-header"><h1>List of judges and number of times judged</h1></div>
    <div class="card-body">
      <div class="row" style="margin: 0rem .5rem 1.5rem">
        <button onclick="exportTableToCSV('JudgeScoreCount.csv')" class="btn btn-primary">Export Judge Count</button>
        <p class="col-10">Click button to begin download.</p>
      </div>

<div class="container bg-white">
 <table class="table table-striped">
    <thead>
      <tbody style="display:none">
    <tr>
    <th>JudgeID</th>
    <th>Judge Username</th>
    <th>Judge Name</th>
    <th>Count</th>
    </tr></thead>

    <?php foreach($judgetimes as $js){?>
        <tr>
        <td><?php echo $js->JudgeID;?></td>
        <td><?php echo $js->JudgeName;?></td>
        <td><?php echo $js->JFirst." ".$js->JLast;?></td>
        <td><?php echo $js->Times;?></td>
        </tr>
     <?php }?>
    </table></div>
    </body>
</html>
