<?php /* Smarty version Smarty-3.1.8, created on 2012-05-14 10:26:08
         compiled from "E:\server2go\php\templates\tag.html" */ ?>
<?php /*%%SmartyHeaderCode:50494fb0c1a0dcd054-61140226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a678194f698c04e2b312655dd8f0207343cc4eaa' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\tag.html',
      1 => 1336899360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50494fb0c1a0dcd054-61140226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'i' => 0,
    'way' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb0c1a1109c07_67121796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb0c1a1109c07_67121796')) {function content_4fb0c1a1109c07_67121796($_smarty_tpl) {?><div class="one">
  <span class="name"><b> Images </b></span> <br> <br>
  <div class="border">
    <div class="slide">
        <?php  $_smarty_tpl->tpl_vars['way'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['way']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['way']->key => $_smarty_tpl->tpl_vars['way']->value){
$_smarty_tpl->tpl_vars['way']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['way']->key;
?>
        <img id = "<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="tag" src="<?php echo $_smarty_tpl->tpl_vars['way']->value;?>
" alt="изображение загружается"> 
        <?php } ?>
    </div>
  </div>
</div><?php }} ?>