
<!DOCTYPE html>
<html>
  <head>
    <link href="../style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
  <title>startpage</title>
  </head>
<body>
  <h1> My own personal not so secrect startpage with links to a lot of stuff</h1>

  <nav>
      <?php
        $TITLE = "kjerulf.dev startpage";
        ob_start();
      ?>

      <?php

        $CONTENT = ob_get_clean();
        include('../template.html');;
      ?>
  </nav>
<br>
<a href="https://my.azehosting.net/aff.php?aff=286" target="_blank"> Aze admin panel </a>
<br><br>
<a href="https://bddatabase.net" target="_blank"> Black desert database </a>
<br><br>
<a href="https://bdoplanner.com/" target="_blank"> BDO gear planner </a>
<br><br>
<a href="https://bdoplanner.com/AzwellCollegeScale" target="_blank"> BDO my Shai </a>
<br><br>
<a href="https://grumpygreen.cricket/bdo-failstack-chart/BDO" target="_blank"> Failstack guide </a>
<br><br>
<a href="https://kjerulf.dev/trss/" target="_blank"> RSS reader </a>
<br><br>
<a href="https://kjerulf.dev/l/" target="_blank"> URL shortner </a>
<br><br>
<a href="https://zallit.dk/smf" target="_blank"> So much fun forum </a>


</body>
