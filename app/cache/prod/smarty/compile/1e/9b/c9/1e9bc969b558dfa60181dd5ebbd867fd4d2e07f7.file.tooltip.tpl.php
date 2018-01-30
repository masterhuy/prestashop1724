<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:17:17
         compiled from "D:\xampp\htdocs\prestashop1724\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34235a5da6fdbb58f9-76113692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e9bc969b558dfa60181dd5ebbd867fd4d2e07f7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1508746876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34235a5da6fdbb58f9-76113692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5da6fdbbd5f0_19783470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5da6fdbbd5f0_19783470')) {function content_5a5da6fdbbd5f0_19783470($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
