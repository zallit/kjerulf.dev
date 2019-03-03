<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
  <title>Tools used to code Zallit´s testing site </title>
  </head>
<body>
      <h1 id="top">Tools used to code Zallit´s testing site</h1>
  <nav>
        <?php
          $TITLE = "Tools";
          ob_start();
        ?>

        <?php

          $CONTENT = ob_get_clean();
          include "template.html";
        ?>
  </nav>
<h1>Editor</h1>
<a href=www.atom.io>Github´s ATOM Editor </a> with the following plugins: <br>
<a href=https://atom.io/packages/emmet>Emmet</a> <br>
<a href=https://github.com/akonwi/git-plus>git-plus </a> <br>
<a href=https://github.com/icetee/remote-ftp>remote-FTP</a> <br>
<br>
<h1>Code storage</h1> <br>
<h2>Github </h2> <br>
<h2>AZE webhosting <a href=https://my.azehosting.net/aff.php?aff=286>www.aze-hosting.dk </h2>

</body>
