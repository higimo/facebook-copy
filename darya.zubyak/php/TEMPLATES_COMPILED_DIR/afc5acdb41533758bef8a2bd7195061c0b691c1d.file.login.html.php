<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 13:03:36
         compiled from "H:\server2go\php\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:17004fae4388230050-67332685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc5acdb41533758bef8a2bd7195061c0b691c1d' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\login.html',
      1 => 1336716932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17004fae4388230050-67332685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae43883204c7_88175506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae43883204c7_88175506')) {function content_4fae43883204c7_88175506($_smarty_tpl) {?><div class="one">
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