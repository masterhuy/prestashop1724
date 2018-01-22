<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 08:51:19
         compiled from "D:\xampp\htdocs\jms_fluent\modules\jmsbrands\views\templates\hook\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43865a65a6073cd3c2-03456460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692973c8410a4dafcbce4566bd4525c7108271d3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\modules\\jmsbrands\\views\\templates\\hook\\list.tpl',
      1 => 1516090198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43865a65a6073cd3c2-03456460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'brands' => 0,
    'brand' => 0,
    'image_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a65a6074474f3_62064515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a65a6074474f3_62064515')) {function content_5a65a6074474f3_62064515($_smarty_tpl) {?>

<div class="panel">
	<h3>
		<i class="icon-list-ul"></i> 
		<?php echo smartyTranslate(array('s'=>'Brands list','d'=>'Modules.JmsBrands.Admin'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&addLogo=1">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
					<i class="process-icon-new "></i>
				</span>
			</a>
		</span>
	</h3>
	<div id="slidesContent">
		<div id="slides">
			<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
				<div id="slides_<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
							<?php if ($_smarty_tpl->tpl_vars['brand']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
" class="img-thumbnail" />
							<?php }?>
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">#<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
</h4>
							<div class="btn-group-action pull-right">
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&changeStatus&id_brand=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
" title="title="<?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>"">
									<i class="<?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>		
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&id_brand=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','d'=>'Modules.JmsBrands.Admin'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&delete_id_brand=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','d'=>'Modules.JmsBrands.Admin'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>
