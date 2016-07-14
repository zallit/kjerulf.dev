<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
<title>test page 2</title>

</head>
<h1>test page 2</h1>
<nav>
      <?php
        $TITLE = "test page 2";
        ob_start();
      ?>

      <?php

        $CONTENT = ob_get_clean();
        include "template.html"
      ?>
</nav>

<body>


</body>
</html>
