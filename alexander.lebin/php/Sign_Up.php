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
      $nameFile = 'menu';
      print_file($nameFile);
  ?>
  <form method="POST" action="/php/registration.php">
    <div class="bord">
      <div class="st">
        <span ><b>Sign Up</b></span>
        <div>
          It's free and always will be.
        </div>   
        <div class="line1">
          <div class="titlle">
            <span class="titlle1"> First Name: </span> 
		    <input class="inputroll" type ="text" name="first_name">
		    <br>
          </div>
          <div class="titlle">	 
            <span class="titlle1"> Last Name:</span> 
		    <input class="inputroll" type ="text" name="last_name">
		    <br>
          </div> 
          <div  class="titlle">     
		    <span class="titlle1"> Your Email:</span>	
		    <input class="inputroll" type ="text" name="email">
		    <br>
		  </div>
		  <div  class="titlle">	
            <span class="titlle1"> Re-enter Email:</span>
		    <input  class="inputroll" type ="text" name="re_email">
		    <br>
		  </div>
		  <div class="titlle">
            <span class="titlle1"> New Password:</span> 
		    <input class="inputroll" type ="password" name="password">
		    <br>
		  </div>
		  <div class="titlle">
            <span class="titlle1"> I am: </span>
		    <select class="ss" name="sex">
              <option value='-1'>Select Sex</option>
              <option value='women'> women </option>
	          <option value='men'> men </option>  
            </select> 
		  <br>
		  </div>
		  <div class="titlle">
            <span class="titlle1"> Birthday:</span>
            <select class="month" name="month">
              <option value='-1'> Month: </option>
	          <option value='01'> January </option>
	          <option value='02'> February </option>   
              <option value='03'> March </option>
	          <option value='04'> April </option>
              <option value='05'> May </option>
	          <option value='06'> June </option>   
              <option value='07'> July </option>
              <option value='08'> August </option>
	          <option value='09'> September </option>   
              <option value='10'> October </option>
              <option value='11'> November </option>
	          <option value='12'> December </option>   
            </select>
            <select class="day" name="day">
              <option value='-1'> Day: </option>
              <?php
                  for ($i=1; $i<=31; $i++) 
                  {
                      echo "<option value=$i> $i </option>"; 
                  } 
              ?>
            </select> 
		    <select class="year" name="year">
              <option value='-1'> Year: </option>
              <?php
                  for ($i=1900; $i<=2010; $i++) 
                  {
                      echo "<option value=$i> $i </option>"; 
                  } 
              ?>
		    </select>
		    <br>		  
		  </div>
		  <div class="provide">
        <a class="provide" title="Official site of GOOGLE"  href="http://google.ru"> 
           Why do I need to provide this?
        </a>
     </div>
	 <div class="signUp2">
        <input class="mybutton" type="submit" value="Sign Up">
      </div>
      </div>
	</div>
    </div>
	</form>
</body>

</html>