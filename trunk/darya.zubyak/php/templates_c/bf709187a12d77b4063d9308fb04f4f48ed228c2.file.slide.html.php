<?php /* Smarty version Smarty-3.1.8, created on 2012-05-08 17:09:05
         compiled from "E:\server2go\php\templates\slide.html" */ ?>
<?php /*%%SmartyHeaderCode:168354fa8160954ad44-24732820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf709187a12d77b4063d9308fb04f4f48ed228c2' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\slide.html',
      1 => 1336489696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168354fa8160954ad44-24732820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa816096aec95_86054814',
  'variables' => 
  array (
    'way' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa816096aec95_86054814')) {function content_4fa816096aec95_86054814($_smarty_tpl) {?><div class="one">
  <span class="name"><b> Images </b></span> <br> <br>
  <div class="border">
    <img id = "image" class="image" src="<?php echo $_smarty_tpl->tpl_vars['way']->value;?>
" alt="изображение загружается"> 
  </div>
</div><?php }} ?>