<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 13:13:10
         compiled from "H:\server2go\php\templates\form_of_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:134954fae45c65c8fb6-56505014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a324e2976da7a325300e39ae1948af35ae1a8d8' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\form_of_upload.html',
      1 => 1336717028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134954fae45c65c8fb6-56505014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae45c6616279_69673866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae45c6616279_69673866')) {function content_4fae45c6616279_69673866($_smarty_tpl) {?><div class="one">
  <span class="name">
    <b>Upload files</b>
  </span> 
  <br> 
  <br>
  <div class="border">
    <form enctype="multipart/form-data" action="/php/save_file.php" method="post">
      <div class="three_big">
        <span> Choose a file to upload </span> <br> 
        <input type="file" name="my_file"> 
        <br> 
        <span class="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </span> 
        <br>
        <input class="up" type="submit" value="Upload">
      </div>
    </form>
  </div>
</div>
<?php }} ?>