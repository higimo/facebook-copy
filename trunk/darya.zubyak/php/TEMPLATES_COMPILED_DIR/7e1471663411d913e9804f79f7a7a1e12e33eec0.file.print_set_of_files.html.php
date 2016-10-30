<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 13:13:14
         compiled from "H:\server2go\php\templates\print_set_of_files.html" */ ?>
<?php /*%%SmartyHeaderCode:256364fae45ca8bb518-13185585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1471663411d913e9804f79f7a7a1e12e33eec0' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\print_set_of_files.html',
      1 => 1336716970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256364fae45ca8bb518-13185585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae45ca902dd3_43957369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae45ca902dd3_43957369')) {function content_4fae45ca902dd3_43957369($_smarty_tpl) {?><div class="one">
  <span class="name">
    <b> Set of files </b>
  </span> 
  <br> 
  <br>
  <div class="border">
    <form action="/php/file_list.php" method="post">
      <div class="three_big">
        <span> File Extension </span> 
        <br> 
        <input type="text" name="extension">
        <br> 
        <span class="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </span> 
        <br>
        <input class="up" type="submit" value="Filter">
      </div>
    </form>
  </div>
</div><?php }} ?>