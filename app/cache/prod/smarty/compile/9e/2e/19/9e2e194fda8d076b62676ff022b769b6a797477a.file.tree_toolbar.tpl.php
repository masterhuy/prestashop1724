<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 08:20:44
         compiled from "D:\xampp\htdocs\jms_fluent\admin367i0kovu\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37435a659edcb08597-36545191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e2e194fda8d076b62676ff022b769b6a797477a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\admin367i0kovu\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1508746756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37435a659edcb08597-36545191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a659edcb89420_46581411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a659edcb89420_46581411')) {function content_5a659edcb89420_46581411($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
