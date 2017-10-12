<?php
/* Smarty version 3.1.30, created on 2017-10-05 19:35:45
  from "C:\xampp\htdocs\tp2fin\templates\administrarusuarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d66d7194f0c4_74548492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4eb8de79cf42e2e691672dcbc5fc5be15567d57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\administrarusuarios.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d66d7194f0c4_74548492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table">
  <thead>
    <tr>
      <th>Usuario</th>
      <th>Privilegio</th>
      <th>Configuracion</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['usuario']->value) {
?>
    <tr>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>

      </td>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['usuario']->value['privilegio'];?>

      </td>
      <td>
        <a  class="consulta_js" href="#" name="editor_usuario" data="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"><span class="glyphicon glyphicon-pencil" ></span></a>
      </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
