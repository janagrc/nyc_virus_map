<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>NYC Virus Map</title>
  <meta name="Mapping of syndromic data from NYC's EpiQuery system to track COVID-19 spread through New York City zip codes" content="NYC Virus Map">
  <meta name="Jana Grcevich" content="">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
<div style="max-width:500px;">
<img src="rate_20200330.png" alt="Map of ER visits for flu-like or respiratory syndromes by NYC zip code" style="width:500px">
</div>

<?php
echo "<html><body><table>\n\n";
$f = fopen("./data/data_20200330.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";

<a href="https://github.com/janagrc/nyc_virus_map">NYC Virus Map on github</a>


</body>
</html>