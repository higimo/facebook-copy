<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 09:40:51
         compiled from "E:\server2go\php\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:215114fae1403cfc382-16857992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593e74cb71be516b7b50e02b1ac7ddd5eb63221e' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\login.html',
      1 => 1336713332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215114fae1403cfc382-16857992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae1403eb3bc6_29620425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae1403eb3bc6_29620425')) {function content_4fae1403eb3bc6_29620425($_smarty_tpl) {?><div class="one">
  <span class="name">
    <b> Login </b>
  </span> 
  <br> 
  <br>
  <div class="border">
    <form action="/php/session.php" method="post">
      <div class="three_big">
        <span> User Email </span> <br>  
        <input type="text" name="email"> <br>
        <span> Password </span> <br> 
        <input type="password" name="password">
        <br> 
        <span class="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </span> 
        <br>
        <input class="up" type="submit" value="Enter">
      </div>
    </form>
  </div>
</div><?php }} ?>