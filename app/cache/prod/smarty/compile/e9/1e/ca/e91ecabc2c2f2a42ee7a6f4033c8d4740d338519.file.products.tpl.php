<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:38:46
         compiled from "D:\xampp\htdocs\prestashop1724\themes\jms_fluent\templates\catalog\_partials\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302615a5dac063388b6-34849716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e91ecabc2c2f2a42ee7a6f4033c8d4740d338519' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\themes\\jms_fluent\\templates\\catalog\\_partials\\products.tpl',
      1 => 1516084474,
      2 => 'file',
    ),
    'd131bcea8a6e29e9af6a3d266c7756b40abf48ba' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\themes\\jms_fluent\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1516084474,
      2 => 'file',
    ),
    'd1a81923cee7b6ba73e36c2a50899ad8a26e299b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\themes\\jms_fluent\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1516084474,
      2 => 'file',
    ),
    '68a613667065b072dc4724f23b9640133fb7320d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop1724\\themes\\jms_fluent\\templates\\_partials\\pagination.tpl',
      1 => 1516084474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302615a5dac063388b6-34849716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5dac0648c688_74067552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5dac0648c688_74067552')) {function content_5a5dac0648c688_74067552($_smarty_tpl) {?>
<div id="js-product-list">
  <div class="products row">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      
        <?php /*  Call merged included template "catalog/_partials/miniatures/product.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '302615a5dac063388b6-34849716');
content_5a5dac06344431_48627147($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/product.tpl" */?>
      
    <?php } ?>
  </div>

  
    <?php /*  Call merged included template "_partials/pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, '302615a5dac063388b6-34849716');
content_5a5dac06446179_91306987($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/pagination.tpl" */?>
  

  <div class="hidden-md-up text-xsright up">
    <a href="#header" class="btn btn-secondary button-small btn-default btn-effect">
      <?php echo smartyTranslate(array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

     
    </a>
  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:38:46
         compiled from "D:\xampp\htdocs\prestashop1724\themes\jms_fluent\templates\catalog\_partials\miniatures\product.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a5dac06344431_48627147')) {function content_5a5dac06344431_48627147($_smarty_tpl) {?>

<div class="product-miniature js-product-miniature product-preview item-gutter-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_gutterwidth']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
			   <div class="preview">
					
					  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image <?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value)&&$_smarty_tpl->tpl_vars['jpb_phover']->value=='image_swap') {?>image_swap<?php } else { ?>image_blur<?php }?>">
						<img class="img-responsive product-img1"
						  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
						  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
						  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
						/>
						<?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value)&&$_smarty_tpl->tpl_vars['jpb_phover']->value=='image_swap'&&$_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
							<img class="img-responsive product-img2"
							  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
							  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							/>
						<?php }?>
					  </a>
						
						<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['flag']->value['label']=='New') {?>
							<span class="label label-new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['flag']->value['label']=='On sale!') {?>
							<span class="label label-sale"><?php echo smartyTranslate(array('s'=>'Sale','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
							<?php }?>
						<?php } ?>
					   
					
					
						
							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
								<div class="color_to_pick_list">
									<?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '302615a5dac063388b6-34849716');
content_5a5dac06386ac0_56546126($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
								</div>
							<?php }?>
						
					
						<a  data-link-action="quickview" class="quick-view product-btn hidden-xs">
								<span class="pe pe-7s-link"></span>
						</a>
				</div>
						
		<div class="product-info">
		        <?php if (isset($_smarty_tpl->tpl_vars['jpb_categoryname']->value)&&$_smarty_tpl->tpl_vars['jpb_categoryname']->value) {?>
				    <span class="categoryname">
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl);?>
">
						<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
					</span>
			    <?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['jpb_wishlist']->value)&&$_smarty_tpl->tpl_vars['jpb_wishlist']->value) {?>
					<a class="addToWishlist product-btn"  onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'html'), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist'),$_smarty_tpl);?>
">
							  <span class="pe pe-7s-like"></span>
					</a>
				<?php }?>
					
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['link'],'html'), ENT_QUOTES, 'UTF-8');?>
" class="product-link"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
					
				  
					
						<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
						  <div class="content_price">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
							  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

							  <span class="old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

							<span class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

						  </div>
						<?php }?>
					
					<div class="product-description">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['description_short'],170,'...');?>

					 </div>
                    <div class="product_button">
							<a <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<1) {?>disabled<?php }?> class="ajax-add-to-cart product-btn cart-button btn-effect btn-default <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)&&$_smarty_tpl->tpl_vars['static_token']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
								    <span class="text-addcart"><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
	</span>		
								   <span class="text-outofstock"><?php echo smartyTranslate(array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
                                    <span class="fa fa-spin fa-spinner"></span>
									<span class="pe pe-7s-check"></span>								   
							</a>
                           <?php if (isset($_smarty_tpl->tpl_vars['jpb_wishlist']->value)&&$_smarty_tpl->tpl_vars['jpb_wishlist']->value) {?>							
							<a class="addToWishlist product-btn btn-effect btn-default"  onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'html'), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist'),$_smarty_tpl);?>
">
							  <span class="pe pe-7s-like"></span>
							</a>
							<?php }?>
					</div>
					
					
			
		</div>
		<div class="product_action">
						<a <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<1) {?>disabled<?php }?> class="ajax-add-to-cart product-btn cart-button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)&&$_smarty_tpl->tpl_vars['static_token']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
								 <span class="text-addcart"><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
	</span>		
								 <span class="text-outofstock"><?php echo smartyTranslate(array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
								  <span class="fa fa-spin fa-spinner"></span>
								   <span class="pe pe-7s-check"></span>	
										
					   </a>
	    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:38:46
         compiled from "D:\xampp\htdocs\prestashop1724\themes\jms_fluent\templates\catalog\_partials\variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a5dac06386ac0_56546126')) {function content_5a5dac06386ac0_56546126($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 14:38:46
         compiled from "D:\xampp\htdocs\prestashop1724\themes\jms_fluent\templates\_partials\pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a5dac06446179_91306987')) {function content_5a5dac06446179_91306987($_smarty_tpl) {?>
<nav class="pagination col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <div class="col-md-6 col-sm-6 col-xs-6 left-pagination">
    
      <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl);?>

    
  </div>

  <div class=" col-md-6 col-sm-6 col-xs-6 right-pagination">
    
     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
        <ul class="page-list clearfix text-sm-center">
          <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
          
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='spacer') {?>
                <span class="spacer">&hellip;</span>
              <?php } else { ?>
                <a
                  rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next<?php } else { ?>nofollow<?php }?>"
                  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                  class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next <?php }?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>
                    <i class="fa fa-chevron-left"></i>
                  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>
                   <i class="fa fa-chevron-right"></i>
                  <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                  <?php }?>
                </a>
              <?php }?>
            </li>
          <?php } ?>
        </ul>
      <?php }?>
    
  </div>

</nav>
<?php }} ?>
