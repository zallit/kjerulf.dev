<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">  <!-- Tell the page to use style.css as a stylesheet and defines how the text and background looks-->
    <meta charset="utf-8"> <!-- Defines what kind of character set is in use -->
      <h1>Test page 2</h1>
  <title>Test page 2</title> <!-- The page title showing in the browser window -->
    <?php

    $CONTENT = ob_get_clean();
    include "template.html"
  ?>

  </head>

    <nav> <!-- My very simple navigation menu -->
      <?php
        $TITLE = "test page 2";
        ob_start();
      ?>

</nav>


<body>
  This is page2.php and I hope there is a menu on it and it is repsonsive

</body>
</html>
