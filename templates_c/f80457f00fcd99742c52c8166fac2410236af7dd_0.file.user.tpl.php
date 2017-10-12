<?php
/* Smarty version 3.1.30, created on 2017-10-12 06:43:16
  from "C:\xampp\htdocs\tp2finanda\templates\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59def2e4af7ac6_46166556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f80457f00fcd99742c52c8166fac2410236af7dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finanda\\templates\\user.tpl',
      1 => 1507783391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59def2e4af7ac6_46166556 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?><a class="btn btn-warning consulta_js" name="administrar_usuarios" href="#" rel="adminUser">Administrar Usuarios<span class="sr-only">(Administrar Usuarios)</span></a><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['session']->value == false)) {?><a class="btn btn-success consulta_js" name="mostrar_register" href="#" rel="registrar">Registrar<span class="sr-only">(Registrar)</span></a><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['session']->value == false)) {?><a class="btn btn-success consulta_js" name="mostrar_login" href="#" rel="login">Login<span class="sr-only">(Login)</span></a><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['session']->value == true)) {?><a class="bg-primary consulta_js" name="logout"><button class=" btn btn-danger" name="logout" type="submit">Cerrar Sesión</button></a><?php }?>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

  </div>

</div>
<?php }
}
