<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 20:10:19
         compiled from "E:\server2go\php\templates\form_of_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:153964fa80d40984cd1-48611397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54389f8ba0510b93164d8dfe0c9ccb4138b802c2' => 
    array (
      0 => 'E:\\server2go\\php\\templates\\form_of_upload.html',
      1 => 1336414214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153964fa80d40984cd1-48611397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa80d40afb881_40299823',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa80d40afb881_40299823')) {function content_4fa80d40afb881_40299823($_smarty_tpl) {?><div class="one">
  <span class="name"><b>Upload files</b></span> <br> <br>
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