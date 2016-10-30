<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 14:08:21
         compiled from "E:\server2go\php\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:324994fa7bb358a2d41-95853621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9c44fc70d20fa112bd15586a0760209b0b23fe6' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\header.html',
      1 => 1336392500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324994fa7bb358a2d41-95853621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7bb35a3be58_17927545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7bb35a3be58_17927545')) {function content_4fa7bb35a3be58_17927545($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script type="text/javascript" src="/js/jQuery.js"> </script>
  <script type="text/javascript" src="/js/survey.js"> </script>
</head>
<body>
  <div class="header">
    <div class="menu" id="block_menu">
      <ul>
        <li class="menu_element">
          <div class="punkt" id="punkt">
            <button type="button" class="menu_button">  <b>  Enter  </b>  </button> 
            <div class="list_punkts" id="button">  <div class="kont">
              <a  href="/php/login.php"> 
                <button type="button" class="pod_button"> <b>  Login  </b> </button> 
              </a>
              <a class="podpunkt"  href="/php/sign_in.php"> 
                <button type="button" class="pod_button"> <b>  Sign Up  </b> </button> 
              </a>
            </div> </div>
          </div>
        </li>
        <li class="menu_element"> 
          <a href="/php/get_user_info.php"> 
            <button type="button" class="menu_button">  <b> Get User Info </b> </button> 
          </a> 
        </li>
        <li class="menu_element"> 
          <a href="/php/upload.php"> 
            <button type="button" class="menu_button"> <b>  Upload files  </b> </button> 
          </a> 
        </li>
        <li class="menu_element"> 
          <a href="/php/set_of_files.php"> 
            <button type="button" class="menu_button"> <b>  Set of files  </b> </button> 
          </a> 
        </li>
        <li class="menu_element"> 
          <a href="/php/set_of_users.php"> 
            <button type="button" class="menu_button"> <b>  User list  </b> </button> 
          </a> 
        </li>
        <li class="menu_element"> 
          <a href="/php/slideshow.php"> 
            <button type="button" class="menu_button"> <b>  Slideshow  </b> </button> 
          </a> 
        </li>
        <li class="menu_element"> 
          <a href="/php/exit.php"> 
            <button id="buttonExit" type="button" class="menu_button"> <b>  Exit  </b> </button> 
          </a> 
        </li>
        <li class="name">
          <a   class="user_name"> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 </a>  
          <input id="userName" type="hidden" name="favorites" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
        </li>
      </ul>
    </div>  
  </div>
<?php }} ?>