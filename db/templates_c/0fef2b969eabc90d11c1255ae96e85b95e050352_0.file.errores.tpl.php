<?php
/* Smarty version 3.1.30, created on 2017-10-05 19:23:28
  from "C:\xampp\htdocs\tp2fin\db\templates\errores.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d66a90bf5971_82918153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fef2b969eabc90d11c1255ae96e85b95e050352' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\db\\templates\\errores.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d66a90bf5971_82918153 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['asignados']->value) {?>
<div class="panel panel-filled panel-c-info">
    <div class="panel-heading">
        La conexion fue establecida correctamente.
    </div>
</div>
<?php } elseif (!$_smarty_tpl->tpl_vars['asignados']->value) {?>
<div class="panel panel-filled panel-c-danger">
    <div class="panel-heading">
        Hubo un error al conectarse.
    </div>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['db_correcto']->value)) {
if ($_smarty_tpl->tpl_vars['db_correcto']->value > 0) {?>
<div class="panel panel-filled panel-c-info">
    <div class="panel-heading">
        Se agregaron datos a la base de datos correctamente.
    </div>
</div>
<?php } else { ?>
<div class="panel panel-filled panel-c-danger">
    <div class="panel-heading">
        Hubo un problema al agregar los datos (<?php echo $_smarty_tpl->tpl_vars['db_correcto']->value;?>
)
    </div>
</div>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['asignados']->value) {?><a href="../index.php" class="btn btn-w-md btn-success btn-block">Ir al inicio</a><?php }
}
}
