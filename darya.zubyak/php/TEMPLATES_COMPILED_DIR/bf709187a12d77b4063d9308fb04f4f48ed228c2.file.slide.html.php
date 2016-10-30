<?php /* Smarty version Smarty-3.1.8, created on 2012-05-14 10:24:36
         compiled from "E:\server2go\php\templates\slide.html" */ ?>
<?php /*%%SmartyHeaderCode:38094fae19f6ad8e79-95584377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf709187a12d77b4063d9308fb04f4f48ed228c2' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\slide.html',
      1 => 1336839730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38094fae19f6ad8e79-95584377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae19f6c3cc24_62964895',
  'variables' => 
  array (
    'way' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae19f6c3cc24_62964895')) {function content_4fae19f6c3cc24_62964895($_smarty_tpl) {?><div class="one">
  <span class="name"><b> Images </b></span> <br> <br>
  <div class="border">
    <div class="slide">
      <img id = "image" class="image" src="<?php echo $_smarty_tpl->tpl_vars['way']->value;?>
" alt="изображение загружается"> 
    </div>
    <div id="slideLeft" class="slide_left">
    </div>
    <div id="slideRigth" class="slide_right">  
    </div>
  </div>
</div><?php }} ?>