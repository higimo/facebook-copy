<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 09:52:29
         compiled from "E:\server2go\php\templates\print_set_of_files.html" */ ?>
<?php /*%%SmartyHeaderCode:199534fae16bda40c50-65780662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65de3e8edd93bfc3390a7be331a4d72b1125c044' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\print_set_of_files.html',
      1 => 1336713370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199534fae16bda40c50-65780662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae16bdbf3fe0_71501182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae16bdbf3fe0_71501182')) {function content_4fae16bdbf3fe0_71501182($_smarty_tpl) {?><div class="one">
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