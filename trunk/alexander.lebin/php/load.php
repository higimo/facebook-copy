<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <meta content="text/html; charset=windows-1251" http-equiv="content-type">
  <title> Sign up </title>
  <link rel="stylesheet" type="text/css" href="/css/c8.css">
</head>

<body class="primery">
  <?php
      include 'D:\Web курсы\server2go\php\lib\print_file.inc';
      $name_file = 'menu';
      print_file($name_file);
  ?>
  <div class="bord">
    <?php
        define("SITE_ROOT", "D:\\Web курсы\\server2go\\");
        define("UPLOAD_DIR", SITE_ROOT . "\\uploaded");
        $fileUploaded = false;
        if (isset($_FILES['my_file']));
        { 
            $fileInfo = $_FILES['my_file'];
            $tmpPath = $fileInfo['tmp_name'];
            $realName = $fileInfo['name'];
            $savePath = UPLOAD_DIR . "\\" . $realName;
            $fileUploaded = move_uploaded_file($tmpPath, $savePath);
        }
        echo ( ($fileUploaded) ? "<div class=\"st\">File was uploaded</div>\n" : "<div class=\"st\">File was not uploaded</div>\n" );
    ?>
  </div>
</body>

</html>
