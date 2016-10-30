<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 20:03:14
         compiled from "E:\server2go\php\templates\print_set_of_files.html" */ ?>
<?php /*%%SmartyHeaderCode:218254fa7bd94013e02-48320795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65de3e8edd93bfc3390a7be331a4d72b1125c044' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\print_set_of_files.html',
      1 => 1336413792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218254fa7bd94013e02-48320795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7bd941ae500_51031751',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7bd941ae500_51031751')) {function content_4fa7bd941ae500_51031751($_smarty_tpl) {?><div class="one">
  <span class="name"><b> Set of files </b></span> <br> <br>
  <div class="border">
    <form action="/php/file_list.php" method="post">
      <div class="three_big">
        <span> File Extension </span> <br> 
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