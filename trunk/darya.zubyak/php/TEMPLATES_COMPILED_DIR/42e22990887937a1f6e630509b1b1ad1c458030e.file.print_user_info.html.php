<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 09:52:05
         compiled from "E:\server2go\php\templates\print_user_info.html" */ ?>
<?php /*%%SmartyHeaderCode:10244fae16a5d8eec4-41708966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e22990887937a1f6e630509b1b1ad1c458030e' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\print_user_info.html',
      1 => 1336713374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10244fae16a5d8eec4-41708966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first_name' => 0,
    'last_name' => 0,
    'password' => 0,
    'sex' => 0,
    'birthday' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae16a603fe40_02927051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae16a603fe40_02927051')) {function content_4fae16a603fe40_02927051($_smarty_tpl) {?><div class="one">
  <span class="name"><b>User Info</b></span> <br>
  <div class="border">  
    <div class="three_big">
      <ol>
        <li> The first name is <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 </li>
        <li> The last name is <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
</li>
        <li> Password is <?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</li>
        <li> Sex is <?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
 </li>
        <li> Date of birth is <?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
</li>       
      </ol>
    </div>
  </div>
</div>
<?php }} ?>