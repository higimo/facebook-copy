<?php /* Smarty version Smarty-3.1.8, created on 2012-05-11 07:56:44
         compiled from "E:\server2go\php\templates\form_of_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:31354facaa1c4162f1-40802408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54389f8ba0510b93164d8dfe0c9ccb4138b802c2' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\form_of_upload.html',
      1 => 1336713428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31354facaa1c4162f1-40802408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4facaa1d011978_08517152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4facaa1d011978_08517152')) {function content_4facaa1d011978_08517152($_smarty_tpl) {?><div class="one">
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