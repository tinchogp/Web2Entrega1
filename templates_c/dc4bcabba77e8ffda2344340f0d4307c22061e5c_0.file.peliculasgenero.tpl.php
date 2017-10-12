<?php
/* Smarty version 3.1.30, created on 2017-10-05 19:21:45
  from "C:\xampp\htdocs\tp2fin\templates\peliculasgenero.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d66a295d3cb9_77149671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4bcabba77e8ffda2344340f0d4307c22061e5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\peliculasgenero.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d66a295d3cb9_77149671 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <h1>Buscar Peliculas por Genero</h1>
  <div class="col-2-md botones">
    <form class="" id="peliculas_genero" method="post" enctype="multipart/form-data">
      <select name="genero" id="dropdownGenero">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </select>
      <input type="submit" name="listar" value="Listar por Genero">
    </form>
  </div>
</div>
<div class="filtroPelicula">
</div>

<?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
<h2>Agregar Genero</h2>
    <form class="formulario" action="agregar_genero" method="post" enctype="multipart/form-data">
      <input type="text" name="genero"  required value="" placeholder="Genero">
      <input type="submit" name="Agregar" value="Agregar Genero" id="agregarGenero">
    </form>
  <div class="row">
    <h2>Eliminar Genero</h2>
    <div class="col-2-md botones">
      <form class="formulario" action="eliminar_genero" method="post" enctype="multipart/form-data">
        <select name="genero" id="dropdownEliminarGenero">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <input type="submit" name="eliminar" value="Eliminar Genero">
      </form>
    </div>
  </div>
  <h2>Editar Genero</h2>
    <form class="formulario" action="editar_genero" method="post" enctype="multipart/form-data">
      <div class="">Genero:
      <select class="form-control"  name="id_genero">
        <option value="">Elegir Genero</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <option name="id_genero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <input  type="text" name="generonuevo"  required value="" placeholder="Genero">
        </div>
      <input type="submit" name="Editar" value="Editar Genero" >
    </form>
<?php }
}
}
