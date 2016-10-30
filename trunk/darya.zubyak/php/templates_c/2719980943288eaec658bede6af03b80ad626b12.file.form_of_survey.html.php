<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 20:36:14
         compiled from "E:\server2go\php\templates\form_of_survey.html" */ ?>
<?php /*%%SmartyHeaderCode:254814fa7ba77cce636-09789995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2719980943288eaec658bede6af03b80ad626b12' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\form_of_survey.html',
      1 => 1336413776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254814fa7ba77cce636-09789995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7ba77e4f283_65874888',
  'variables' => 
  array (
    'year' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7ba77e4f283_65874888')) {function content_4fa7ba77e4f283_65874888($_smarty_tpl) {?><div class="one">
  <span class="name"><b>Sign Up</b></span> <br>
  <span class="comment"> It's free and always will be.</span>
  <div class="border">    
    <form id="surveyForm" action="/php/save_survey.php" method="post">
      <div class="two">
        <span> First Name: </span> <br>
        <span> Last Name: </span>  <br>
        <span> Your Email: </span> <br>
        <span> Re-enter Email: </span> <br>
        <span> New Password: </span>   <br>
        <span> I am: </span>  <br>
        <span> Birthday:</span>  
      </div>
      <div class="three_big">
        <input id="firstName"  type ="text" name="first_name"> 
        <input id="lastName" type ="text" name="last_name"> <br>
        <input id="email" type ="text" name="email"> <br>
        <input id="reEmail"  type ="text" name="re_email"> <br>
        <input id="password" type ="password" name="password"> 
        <span id="testPassword" class="message"> </span>
        <br>
        <select id="sex" name="sex">
          <option value='-1'>Select Sex</option>
          <option value='women'> women </option>
          <option value='men'> men </option>   
        </select> <br>
        <select id="month" name="month">
          <option value='-1'> Month: </option>
          <option value='1'> January </option>
          <option value='2'> February </option>   
          <option value='3'> March </option>
          <option value='4'> April </option>
          <option value='5'> May </option>
          <option value='6'> June </option>   
          <option value='7'> July </option>
          <option value='8'> August </option>
          <option value='9'> September </option>   
          <option value='10'> October </option>
          <option value='11'> November </option>
          <option value='12'> December </option>   
        </select>
        <select name="day" id="day">
          <option value='-1'> Day: </option>
          <option value='01'> 01 </option>
          <option value='02'> 02 </option>   
          <option value='03'> 03 </option>
          <option value='04'> 04 </option> 
          <option value='05'> 05 </option>
          <option value='06'> 06 </option> 
          <option value='07'> 07 </option>
          <option value='08'> 08 </option> 
          <option value='09'> 09 </option>
          <option value='10'> 10 </option>   
          <option value='11'> 11 </option>
          <option value='12'> 12 </option> 
          <option value='13'> 13 </option>
          <option value='14'> 14 </option> 
          <option value='15'> 15 </option>
          <option value='16'> 16 </option> 
          <option value='17'> 17 </option>
          <option value='18'> 18 </option>   
          <option value='19'> 19 </option>
          <option value='20'> 20 </option> 
          <option value='21'> 21 </option>
          <option value='22'> 22 </option> 
          <option value='23'> 23 </option>
          <option value='24'> 24 </option> 
          <option value='25'> 25 </option> 
          <option value='26'> 26 </option>   
          <option value='27'> 27 </option>
          <option value='28'> 28 </option> 
          <option value='29'> 29 </option>
          <option value='30'> 30 </option> 
          <option value='31'> 31 </option>
        </select> 
        <select name="year" id="year">
          <option value='-1'> Year: </option>
          <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 
        </select>   
        <br>
        <a href="http://google.com" title="Google"> Why do I need to provide this? </a> 
        <br> 
        <span class="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </span> 
        <br>
        <input id='button' class="up" type="submit" value="Sign Up">
      </div>
    </form>
  </div>
</div>
<?php }} ?>