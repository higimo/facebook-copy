<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 13:03:36
         compiled from "H:\server2go\php\templates\main.html" */ ?>
<?php /*%%SmartyHeaderCode:317574fae43883eee56-76596977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6604a49b70ff4885392e591b96dfa3eb344146ed' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\main.html',
      1 => 1336814282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317574fae43883eee56-76596977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'topMenu' => 0,
    'link' => 0,
    'name' => 0,
    'user' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae4388440347_33914652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae4388440347_33914652')) {function content_4fae4388440347_33914652($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['link']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
          <li class="menu_element">
          <a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
> 
            <button id=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 type="button" class="menu_button">  <b> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </b> </button> 
          </a> 
          </li>
        <?php } ?>
        <li class="menu_element">
          <a class="user_name"> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 </a>  
          <input id="userName" type="hidden" name="favorites" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
        </li>
      </ul>
    </div>  
  </div>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
</html>
<?php }} ?>