<?php
/* Smarty version 3.1.30, created on 2017-10-07 01:20:36
  from "C:\xampp\htdocs\tp2fin\templates\peliculaelegida.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d80fc4d34937_17198174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f14381fe8413448d8c9b03ae58e2cc45f758cdf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\peliculaelegida.tpl',
      1 => 1507332029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d80fc4d34937_17198174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <li>
    <h2><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
</h2>
    <ul>
      <?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value['imagenes'], 'imagen');
$_smarty_tpl->tpl_vars['imagen']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->index++;
$__foreach_imagen_0_saved = $_smarty_tpl->tpl_vars['imagen'];
?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Chania">
      <a class="consulta_js" href="#" name="eliminar_imagen" data="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
"><span class="glyphicon glyphicon-remove" ></span></a>
      <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>

      <?php if ((($_smarty_tpl->tpl_vars['session']->value == false) || (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'usuario')))) {?>
      <div class="">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value['imagenes'], 'imagen');
$_smarty_tpl->tpl_vars['imagen']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->index++;
$__foreach_imagen_1_saved = $_smarty_tpl->tpl_vars['imagen'];
?>
            <?php if ($_smarty_tpl->tpl_vars['imagen']->index == 0) {?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['imagen']->index;?>
" class="active"></li>
            <?php } else { ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['imagen']->index;?>
"></li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value['imagenes'], 'imagen');
$_smarty_tpl->tpl_vars['imagen']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->index++;
$__foreach_imagen_2_saved = $_smarty_tpl->tpl_vars['imagen'];
?>
            <?php if ($_smarty_tpl->tpl_vars['imagen']->index == 0) {?>
            <div class="item active">
              <img class="carrusel" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Chania" >
            </div>
            <?php } else { ?>
            <div class="item">
              <img class="carrusel" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Chania">
            </div>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <?php }?>
      <li><h4>Genero</h4><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['genero'];?>
</li>
      <li><h4>Duracion</h4><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['duracion'];?>
<p>minutos</p></li>
      <li><h4>Descripcion</h4><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>
</li>
  
      <?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
      <div class="panel">
        <a  class="consulta_js" href="#" name="eliminar_pelicula" data="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><span class="glyphicon glyphicon-remove" ></span></a>
        <a  class="consulta_js" href="#" name="editor_pelicula" data="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
" ><span class="glyphicon glyphicon-pencil" ></span></a>
      </div>
      <?php }?>
    </ul>
  </li>
</ul>
<?php }
}
