<?php
/* Smarty version 3.1.30, created on 2017-10-12 02:46:53
  from "C:\xampp\htdocs\tp2fin\templates\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59debb7d6d6527_42775311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea265577909317bb64b21b25e6fe21a0a234936e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\user.tpl',
      1 => 1507769160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59debb7d6d6527_42775311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?><a class="btn btn-warning consulta_js" name="administrar_usuarios" href="#" rel="adminUser">Administrar Usuarios<span class="sr-only">(Administrar Usuarios)</span></a><?php }?>
  <?php if (($_smarty_tpl->tpl_vars['session']->value == false)) {?><a class="btn btn-success consulta_js" name="mostrar_register" href="#" rel="registrar">Registrar<span class="sr-only">(Registrar)</span></a><?php }?>
  <?php if (($_smarty_tpl->tpl_vars['session']->value == false)) {?><a class="btn btn-success consulta_js" name="mostrar_login" href="#" rel="login">Login<span class="sr-only">(Login)</span></a><?php }?>
  <?php if (($_smarty_tpl->tpl_vars['session']->value == true)) {?><a class="bg-primary consulta_js" name="logout"><button class=" btn btn-danger" name="logout" type="submit">Cerrar Sesión</button></a><?php }?>
</div>
<?php }
}
