<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 15:21:57
         compiled from "D:\xampp\htdocs\prestashop1724\modules\jmspagebuilder\views\templates\admin\jmspagebuilder_homepages\listhome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133625a5db625d4b068-89885628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8123d4bb1dbce334414bee712d94f0a6f68dc159' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\modules\\jmspagebuilder\\views\\templates\\admin\\jmspagebuilder_homepages\\listhome.tpl',
      1 => 1516084468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133625a5db625d4b068-89885628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'homepages' => 0,
    'homepage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5db625ddf784_27188428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5db625ddf784_27188428')) {function content_5a5db625ddf784_27188428($_smarty_tpl) {?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'HomePages List','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8');?>
&configure=jmspagebuilder&addHome=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="rows">
		<div id="homepage_list" class="homepage">
			<?php  $_smarty_tpl->tpl_vars['homepage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['homepage']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['homepages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['homepage']->key => $_smarty_tpl->tpl_vars['homepage']->value) {
$_smarty_tpl->tpl_vars['homepage']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['homepage']->key;
?>
				<div id="homepage_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['title'],'html','UTF-8');?>
</h4>
							<div class="btn-group-action pull-right">
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8');?>
&configure=jmspagebuilder&status_id_homepage=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
								<a class="btn btn-default"									href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8');?>
&configure=jmspagebuilder&config_id_homepage=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
">
									<i class="icon-sitemap"></i>
									<?php echo smartyTranslate(array('s'=>'Layout Config','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"									href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8');?>
&configure=jmspagebuilder&duplicate_id_homepage=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
">
									<i class="icon-copy"></i>
									<?php echo smartyTranslate(array('s'=>'Duplicate','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

								</a>	
								<a class="btn btn-default"	href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8');?>
&configure=jmspagebuilder&edit_id_homepage=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

								</a>								
								<a class="btn btn-default"									href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8');?>
&configure=jmspagebuilder&delete_id_homepage=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8');?>
" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

								</a>								
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>
