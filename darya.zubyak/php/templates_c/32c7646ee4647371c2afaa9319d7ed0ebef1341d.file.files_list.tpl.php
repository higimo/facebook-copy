<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 13:54:58
         compiled from "templates\files_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101784fa7b81241fce9-31478709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c7646ee4647371c2afaa9319d7ed0ebef1341d' => 
    array (
      0 => 'templates\\files_list.tpl',
      1 => 1336238466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101784fa7b81241fce9-31478709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7b8125ca894_97128362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7b8125ca894_97128362')) {function content_4fa7b8125ca894_97128362($_smarty_tpl) {?><ul>
  <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
</a></li>
  <?php } ?>
</ul>
<?php }} ?>