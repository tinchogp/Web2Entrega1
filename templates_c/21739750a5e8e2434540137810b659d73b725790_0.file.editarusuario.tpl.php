<?php
/* Smarty version 3.1.30, created on 2017-10-05 19:35:51
  from "C:\xampp\htdocs\tp2fin\templates\editarusuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d66d77d6db37_32397779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21739750a5e8e2434540137810b659d73b725790' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\editarusuario.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d66d77d6db37_32397779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
  <h2>Editar Usuario</h2>
    <form class="formulario" action="editar_usuario" method="post" enctype="multipart/form-data">
      <input  type="hidden" name="email"  value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
">
      <select class="puntaje-api" name="privilegio">
        <option value="administrador">administrador</option>
        <option value="usuario">usuario</option>
      </select>
      <input type="submit" name="Editar" >
    </form>
  </div>
<?php }
}
