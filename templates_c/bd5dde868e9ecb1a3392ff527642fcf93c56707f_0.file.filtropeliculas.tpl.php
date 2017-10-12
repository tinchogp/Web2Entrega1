<?php
/* Smarty version 3.1.30, created on 2017-10-12 14:45:26
  from "C:\xampp\htdocs\tp2finanda\templates\filtropeliculas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df63e60b97b3_08063281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd5dde868e9ecb1a3392ff527642fcf93c56707f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finanda\\templates\\filtropeliculas.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df63e60b97b3_08063281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-5-md contenedorFiltro">
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
      <li>
        <h2><?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
</h2>
        <ul>
          <div class="">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value['imagenes'], 'imagen');
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value['imagenes'], 'imagen');
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
          <li><h4>Genero</h4><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</li>
          <li><h4>Duracion</h4><?php echo $_smarty_tpl->tpl_vars['genero']->value['duracion'];?>
<p>minutos</p></li>
          <li><h4>Descripcion</h4><?php echo $_smarty_tpl->tpl_vars['genero']->value['descripcion'];?>
</li>
        </ul>
      </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    </div>
<?php }
}
