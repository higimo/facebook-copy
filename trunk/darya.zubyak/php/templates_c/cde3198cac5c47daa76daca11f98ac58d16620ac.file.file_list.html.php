<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 20:34:01
         compiled from "E:\server2go\php\templates\file_list.html" */ ?>
<?php /*%%SmartyHeaderCode:172274fa7bdc3b0f3a7-45535242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cde3198cac5c47daa76daca11f98ac58d16620ac' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\file_list.html',
      1 => 1336414748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172274fa7bdc3b0f3a7-45535242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7bdc3d68821_95440926',
  'variables' => 
  array (
    'start' => 0,
    'files' => 0,
    'file' => 0,
    'last' => 0,
    'extension' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7bdc3d68821_95440926')) {function content_4fa7bdc3d68821_95440926($_smarty_tpl) {?><div class="one">
  <span class="name"><b>File List</b></span> <br> <br>
  <div class="border">
    <div class="three_big">
      <ol start="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
">      
          <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['file']->value['file_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['file_name'];?>
</a></li>
      <?php } ?>
      </ol>
    </div>
      <a class = "switch" href="/php/file_list.php?numb=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
&ext=<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"> Last </a>
      <a class = "switch" href="/php/file_list.php?numb=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
&ext=<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"> Next </a>
  </div>
</div>
<?php }} ?>