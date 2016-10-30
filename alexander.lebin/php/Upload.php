<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <meta content="text/html; charset=windows-1251" http-equiv="content-type">
  <title> Upload </title>
  <link rel="stylesheet" type="text/css" href="/css/c8.css">
</head>

<body class="primery">
  <?php
      include 'D:\Web курсы\server2go\php\lib\print_file.inc';
      $nameFile = 'menu';
      print_file($nameFile);
  ?>
  <form enctype="multipart/form-data" action="load.php" method="POST">
    <div class="bord">
      <div class="st">
        <span ><b>Choose a file to upload</b></span>
        <div class="line1">
          <div class="titlle">
            <input  name="my_file" type="file" />
          </div>
          <div>
            <input class="mybutton" type="submit" value="Upload" />
          </div>
        </div>
      </div>
    </div>
  </form>
</html>