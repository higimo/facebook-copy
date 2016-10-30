<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 20:24:07
         compiled from "E:\server2go\php\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:219864fa7bc11038858-50709082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593e74cb71be516b7b50e02b1ac7ddd5eb63221e' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\login.html',
      1 => 1336413762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219864fa7bc11038858-50709082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7bc11197791_89527332',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7bc11197791_89527332')) {function content_4fa7bc11197791_89527332($_smarty_tpl) {?><div class="one">
  <span class="name"><b> Login </b></span> <br> <br>
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