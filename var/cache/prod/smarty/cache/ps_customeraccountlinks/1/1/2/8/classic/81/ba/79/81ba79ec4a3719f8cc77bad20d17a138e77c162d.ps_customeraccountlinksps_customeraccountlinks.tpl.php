<?php
/* Smarty version 4.3.1, created on 2023-09-08 20:40:27
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fb6a9b3afb68_59670625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1678742294,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_64fb6a9b3afb68_59670625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_102627572464fb69f6de9477_02222891',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://34.163.58.181/index.php?controller=my-account" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://34.163.58.181/index.php?controller=guest-tracking" title="Suivi de commande" rel="nofollow">Suivi de commande</a></li>
        <li><a href="http://34.163.58.181/index.php?controller=my-account" title="Identifiez-vous" rel="nofollow">Connexion</a></li>
        <li><a href="http://34.163.58.181/index.php?controller=registration" title="Créez votre compte" rel="nofollow">Créez votre compte</a></li>
        <li>
  <a href="//34.163.58.181/index.php?fc=module&module=ps_emailalerts&controller=account&id_lang=2" title="Mes alertes">
    Mes alertes
  </a>
</li>

       
	</ul>
</div>
<?php }
}
