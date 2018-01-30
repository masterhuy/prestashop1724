<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:17:17
         compiled from "D:\xampp\htdocs\prestashop1724\admin335cebzn4\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274965a5da6fd545072-99740841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f71c7fe4b2609518216e12ca7410d8eba18487b2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\admin335cebzn4\\themes\\default\\template\\content.tpl',
      1 => 1508746756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274965a5da6fd545072-99740841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5da6fd548ef2_80716558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5da6fd548ef2_80716558')) {function content_5a5da6fd548ef2_80716558($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
