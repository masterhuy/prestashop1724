<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:15:08
         compiled from "D:\xampp\htdocs\prestashop1724\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addonsocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111685a5da67c4d4889-26796111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916b03f680fdfd256a4b8e2bad1e42d7c4203eba' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsocial.tpl',
      1 => 1516084473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111685a5da67c4d4889-26796111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'linkedin_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5da67c4ff801_35912990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5da67c4ff801_35912990')) {function content_5a5da67c4ff801_35912990($_smarty_tpl) {?>
<div id="social_block">
	<ul class="find-us">
       <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="facebook"><span class="fa fa-facebook"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="twitter"><span class="fa fa-twitter"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="linkedin"><span class="fa fa-linkedin"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="youtube"><span class="fa fa-youtube"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="gplus"><span class="fa fa-google-plus"></span></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="pinterest"><span class="fa fa-pinterest"></span></a></li><?php }?>            
		 <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
        <li class="divider">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="instagram">
            <span class="fa fa-instagram"></span>
            </a>
        </li>
        <?php }?>
    </ul>
</div>
<?php }} ?>
