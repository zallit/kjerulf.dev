
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
  RSS reader https://kjerulf.dev/trss/

  URL shortner https://kjerulf.dev/l/

  Black desert database

  Aze admin panel
</body>
