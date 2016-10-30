<?php /* Smarty version Smarty-3.1.8, created on 2012-05-16 20:13:33
         compiled from "H:\server2go\php\templates\slide.html" */ ?>
<?php /*%%SmartyHeaderCode:93514fae4a0d6fba39-45673058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2654c6f53ecae0f31cd353343e6353f32641ca9f' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\slide.html',
      1 => 1337191952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93514fae4a0d6fba39-45673058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae4a0d73fb04_44654786',
  'variables' => 
  array (
    'way' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae4a0d73fb04_44654786')) {function content_4fae4a0d73fb04_44654786($_smarty_tpl) {?><div class="one">
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