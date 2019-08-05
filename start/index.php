
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
<a href="https://my.azehosting.net/" > Aze admin panel </a>
<br><br>
<a href="https://bddatabase.net"> Black desert database </a>
<br> <br>
<a href="https://bdoplanner.com/"> BDO gear planner </a>
<br> <br>
<a href="https://bdoplanner.com/AzwellCollegeScale"> BDO my Shai </a>
<br> <br>
<a href="https://grumpygreen.cricket/bdo-failstack-chart/BDO"> Failstack guide </a>
<br><br>
<a href="https://kjerulf.dev/trss/"> RSS reader </a>
<br><br>
<a href="https://kjerulf.dev/l/"> URL shortner </a>
<br><br>
<a href="https://zallit.dk/smf" >So much fun forum </a>


</body>
