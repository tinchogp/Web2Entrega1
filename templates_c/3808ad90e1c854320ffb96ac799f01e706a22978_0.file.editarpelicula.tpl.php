<?php
/* Smarty version 3.1.30, created on 2017-10-07 01:20:39
  from "C:\xampp\htdocs\tp2fin\templates\editarpelicula.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d80fc7ad7376_39633798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3808ad90e1c854320ffb96ac799f01e706a22978' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\editarpelicula.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d80fc7ad7376_39633798 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
  <h2>Editar Pelicula</h2>
    <form class="formulario" action="editar_pelicula" method="post" enctype="multipart/form-data">
      <input  type="hidden" name="id_pelicula"  value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
      <input  type="text" name="titulo"  required value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
" placeholder="Titulo">
      <input type="text" name="duracion"  required value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['duracion'];?>
" placeholder="duracion">
      <div class="">Genero:
      <select class="form-control"  name="genero">
        <option value="">Elegir Genero</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <option name="genero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        </div>
      <textarea  class="form-control" rows="8" type="text" name="descripcion" required value="" placeholder="descripcion"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>
</textarea>
      <input type="file" name="imagenes[]" required value="" multiple>
      <input type="submit" name="Editar" >
    </form>
  </div>
<?php }
}
