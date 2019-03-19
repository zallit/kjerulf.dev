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

<h1> <u>Editor:</u></h1>
<h2> <a href=www.atom.io>Github´s ATOM Editor </a> with the following plugins: </h2>

  <h3> <a href=https://atom.io/packages/emmet> Emmet</a> <br>
  <a href=https://github.com/akonwi/git-plus>git-plus </a> <br>
  <a href=https://github.com/icetee/remote-ftp>remote-FTP</a> <br>
  <a href=https://atom.io/packages/pigments>pigments</a> <br>
 </h3>
<br>
<h1> <u>Code storage:</u></h1>
<h2> <a href=https://github.com/zallit/kjerulf.dev>Github </a> <br>
<a href=https://my.azehosting.net/aff.php?aff=286>Webserver provider </a> </h2>
<h1>take 2</h1>

<ul>
  <li><a href=https://atom.io/packages/emmet> Emmet</a> <br>
  <a href=https://github.com/akonwi/git-plus>git-plus </a> <br>
  <a href=https://github.com/icetee/remote-ftp>remote-FTP</a></li>
</ul>


</body>
