<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 09:57:21
         compiled from "E:\server2go\php\templates\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:118194fae17e1934ce7-29315540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ab9779236d3c1637914c01bc78c10a49fb5499e' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\user_list.html',
      1 => 1336713396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118194fae17e1934ce7-29315540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start' => 0,
    'users' => 0,
    'user' => 0,
    'last' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae17e1b9cd55_09276549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae17e1b9cd55_09276549')) {function content_4fae17e1b9cd55_09276549($_smarty_tpl) {?><div class="one">
  <span class="name"><b>User List</b></span> <br> <br>
  <div class="border">
    <div class="three_big">
      <ol start="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
">      
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
          <li> <a  href="/php/get_user_info.php?user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
  <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
 </li>
      <?php } ?>
      </ol>
    </div>
      <a class = "switch" href="/php/set_of_users.php?numb=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
"> Last </a>
      <a class = "switch" href="/php/set_of_users.php?numb=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
"> Next </a>
  </div>
</div>
<?php }} ?>