<?php
/* Smarty version 3.1.30, created on 2017-10-12 03:03:44
  from "C:\xampp\htdocs\tp2fin\templates\horariosporsala.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59debf7086fe62_43075801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7f17a98e0ca06424660476834b2c0e954be59e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\horariosporsala.tpl',
      1 => 1507770164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59debf7086fe62_43075801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Sala y Horario</h1>
<table class="table">
  <thead>
    <tr>
      <th>Pelicula</th>
      <th>Sala</th>
      <th>Horario</th>
      <?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
      <th>Configuracion</th>
      <?php }?>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'horario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['horario']->value) {
?>
      <tr>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['horario']->value['pelicula'];?>

        </td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['horario']->value['sala'];?>

        </td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['horario']->value['horario'];?>

        </td>
          <?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
        <td>
          <a  class="consulta_js" href="#" name="eliminar_horario" data="<?php echo $_smarty_tpl->tpl_vars['horario']->value['id_horario'];?>
"><span class="glyphicon glyphicon-remove" ></span></a>
          <a  class="consulta_js" href="#" name="editor_horario" data="<?php echo $_smarty_tpl->tpl_vars['horario']->value['id_horario'];?>
"><span class="glyphicon glyphicon-pencil" ></span></a>
        </td>
          <?php }?>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>

<?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>

<div >
<h2>Agregar Horario</h2>
    <form class="formulario" action="agregar_horario" method="post" enctype="multipart/form-data">
      <div class="">Pelicula:
      <select class="form-control" name="titulo">
        <option value="">Elegir Pelicula</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        </div>
      <input type="text" name="sala"  required value="" placeholder="Sala">
      <input type="text" name="horario"  required value="" placeholder="Horario">
      <input type="submit" name="Agregar" id="agregarHorario">
    </form>
</div>
<?php }
}
}
