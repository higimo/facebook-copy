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
  <div class="bord">
    <div class="st">
       <span><b>Data</b></span>
       <div class="line1">
         <div >	 
           <?php
               $title[] = 'First Name';
               $title[] = 'Last Name';
               $title[] = ' Your Email';
               $title[] = 'Re-enter Email';
               $title[] = 'Password';
               $title[] = 'I am';
               $title[] = 'Birthday';
               if (@fopen($_POST['email'] . ".txt", "r"))
               {
                   $j = 0;
		           $file_array = fopen($_POST['email'] . ".txt", "r");
			       for($i = 0; $i < 7; $i++)
                   {
                     $mytext = fgets($file_array);
                     echo '<div><div class="titlle"><span class="titlle1">' .$title[$i]. ': </span>';
                     echo '<input class="inputroll" type ="text" name="' . $title[$i] . '" value="' . $mytext . '"></div></div>'; 
                   }
               }
               else
               {
                   echo '<div><div class="titlle"><span class="titlle1">Пользователя не существует</span></div></div>';
               }
		   ?>
         </div>
       </div>
    </div>
  </div>
</body>

</html>