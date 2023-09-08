<?php
/* Smarty version 4.3.1, created on 2023-09-08 20:29:19
  from '/var/www/html/admin107zokockiwhuwfstqy/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fb67ffd24779_80097472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9f8d8f16ef0763480dbecd9fd4d6400f26f8f4' => 
    array (
      0 => '/var/www/html/admin107zokockiwhuwfstqy/themes/default/template/content.tpl',
      1 => 1689842302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb67ffd24779_80097472 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
