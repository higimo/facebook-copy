<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta content="text/html; charset=windows-1251" http-equiv="content-type">
  <title>Get User Info</title>
  <link rel="stylesheet" type="text/css" href="/css/c8.css">
</head>

<body class="primery">
  <?php
      include 'D:\Web курсы\server2go\php\lib\print_file.inc';
      $nameFile = 'menu';
      print_file($nameFile);
  ?>
  <form method="post" action="/php/User.php">
    <div class="bord">
      <div class="st">
        <span ><b>Recover Data</b></span> 
	    <div class="line1">
	      <div class="titlle">
            <span class="titlle1"> Your Email: </span> 
		    <input class="inputroll" type ="text" name="email">
		    <br>
	      </div>
	      <div class="signUp2">
	        <input class="mybutton" type="submit" value="Recover">
	      </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
