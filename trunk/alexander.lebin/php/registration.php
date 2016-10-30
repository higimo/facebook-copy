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
  <form>
    <div class="bord">
      <?php
          function check()
          {
              $first_name=$_POST['first_name'];
              $last_name=$_POST['last_name'];
              $email=$_POST['email'];
              $re_email=$_POST['re_email'];
              $password=$_POST['password'];
              $sex=$_POST['sex'];
              $month=$_POST['month'];
              $day=$_POST['day'];
              $year=$_POST['year'];   
              if ($first_name == "") 
              {
          	      return 0;
              }
              if ($last_name == "")
              {
            	  return 1;
              }
              if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
              {
              	  return 2;
              }
              $dir = 'D:\Web курсы\server2go\php';
              $files = scandir($dir);
              for ($i = 2 ; $i <= count($files); $i++)
              {
              	if ($email= $files[I])
              	{
              		return 2;
              	}	  
              }
              if ($re_email <> $email)
              {
              	  return 3;
              }
              if ($password == "")
              {
            	  return 4;
              }
              if ($sex == -1)
              {
            	  return 5;
              }
              if ( $month == -1 )
              {
            	  return 6;
              }
              if ($day == -1)
              {
            	  return 6;
              }
              if ($year == -1)
              {
            	  return 6;
              }
              $file = fopen ($_POST['email'].".txt","w+");
              fwrite($file,"".$_POST['first_name'].
              		  "\r\n".$_POST['last_name'].
              		  "\r\n".$_POST['email'].
            		  "\r\n".$_POST['re_email'].
            		  "\r\n".$_POST['password'].
            		  "\r\n".$_POST['sex'].
            		  "\r\n".$_POST['month'].
            		  ".".$_POST['day'].
            		  ".".$_POST['year']);
             return 7;       
          }
          $title[] = 'First Name';
          $title[]='Last Name';
          $title[]=' Your Email';
          $title[]='Re-enter Email';
          $title[]='Password';
          $title[]='sex';
          $title[]='Birthday';
          $i = check();
          if ($i == 7)
          {
	           echo "<div class=\"st\">Your data is saved successfully.</div>\n";
          }
          else
          {
        	  echo "<div class=\"st\">Please enter your ".$title[$i]." .</div>";
          }
      ?>
    </div>
  </form>
</body>
  
</html>
 
 
    
			 