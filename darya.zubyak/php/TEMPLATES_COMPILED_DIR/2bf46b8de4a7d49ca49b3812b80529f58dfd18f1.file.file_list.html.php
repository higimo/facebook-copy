<?php /* Smarty version Smarty-3.1.8, created on 2012-05-12 13:54:35
         compiled from "H:\server2go\php\templates\file_list.html" */ ?>
<?php /*%%SmartyHeaderCode:64424fae4aaf92f537-45968368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf46b8de4a7d49ca49b3812b80529f58dfd18f1' => 
    array (
      0 => 'H:\\server2go\\php\\templates\\file_list.html',
      1 => 1336823672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64424fae4aaf92f537-45968368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fae4aaf9b43b1_27792389',
  'variables' => 
  array (
    'start' => 0,
    'files' => 0,
    'file' => 0,
    'last' => 0,
    'extension' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fae4aaf9b43b1_27792389')) {function content_4fae4aaf9b43b1_27792389($_smarty_tpl) {?><div class="one">
  <span class="name">
    <b>File List</b>
  </span> 
  <br> 
  <br>
  <div class="border">
    <div class="three_big">
      <ol start="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
">      
        <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
        <li>
          <a href="/uploaded/<?php echo $_smarty_tpl->tpl_vars['file']->value['file_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['file_name'];?>

          <p class="vote">
            <a class="vote_button" onClick="vote(this, <?php echo $_smarty_tpl->tpl_vars['file']->value['numberId'];?>
);" > - </a>
            <a class="vote" id=<?php echo $_smarty_tpl->tpl_vars['file']->value['numberId'];?>
> <?php echo $_smarty_tpl->tpl_vars['file']->value['vote'];?>
 </a>
            <a class="vote_button" onClick="vote(this, <?php echo $_smarty_tpl->tpl_vars['file']->value['numberId'];?>
);"> + </a>
          </p>
        </li>
      <?php } ?>
      </ol>
    </div>
      <a class = "switch" href="/php/file_list.php?numb=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
&ext=<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"> Last </a>
      <a class = "switch" href="/php/file_list.php?numb=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
&ext=<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"> Next </a>
  </div>
</div>
<?php }} ?>