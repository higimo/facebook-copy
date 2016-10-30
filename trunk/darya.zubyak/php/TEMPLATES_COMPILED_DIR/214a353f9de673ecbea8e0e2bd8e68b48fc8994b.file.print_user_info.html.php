<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 13:05:45
         compiled from "H:\server2go\php\templates\print_user_info.html" */ ?>
<?php /*%%SmartyHeaderCode:137954fae4409787733-03457532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '214a353f9de673ecbea8e0e2bd8e68b48fc8994b' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\print_user_info.html',
      1 => 1336716974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137954fae4409787733-03457532',
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
  'unifunc' => 'content_4fae44097f7986_56928374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae44097f7986_56928374')) {function content_4fae44097f7986_56928374($_smarty_tpl) {?><div class="one">
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