<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta content="text/html; charset=windows-1251" http-equiv="content-type">
  <title>File</title>
  <link rel="stylesheet" type="text/css" href="/css/c8.css">
</head>

<body class="primery">
  <?php
      include 'D:\Web курсы\server2go\php\lib\print_file.inc';
      $nameFile = 'menu';
      print_file($nameFile);
  ?>
  <div class="bord">
    <div class="st">
      <span ><b>File on server</b></span>
      <div class="line1">
        <?php
            $dir = 'D:\Web курсы\server2go\uploaded';
            $files = scandir($dir);
            for ($i = 2 ; $i <= count($files); $i++)
            {
          	   echo  '<a href="/uploaded/' .$files[$i]. '">' .$files[$i]. '</a><br>'; 
            }
        ?>
      </div>
    </div>
  </div>  
</body>

</html>