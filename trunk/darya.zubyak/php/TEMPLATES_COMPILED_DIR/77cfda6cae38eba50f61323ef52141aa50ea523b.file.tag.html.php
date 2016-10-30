<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 12:01:59
         compiled from "H:\server2go\php\templates\tag.html" */ ?>
<?php /*%%SmartyHeaderCode:65404faf86973f9ab3-66376576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77cfda6cae38eba50f61323ef52141aa50ea523b' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\tag.html',
      1 => 1336902960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65404faf86973f9ab3-66376576',
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
  'unifunc' => 'content_4faf869754d1a3_31145252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4faf869754d1a3_31145252')) {function content_4faf869754d1a3_31145252($_smarty_tpl) {?><div class="one">
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