<?php
/* Smarty version 3.1.30, created on 2017-10-12 03:16:41
  from "C:\xampp\htdocs\tp2fin\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dec279ae0237_10543325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee219b4fa44bc4bf5800420335acc66ebfd0f06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\home.tpl',
      1 => 1507771000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user.tpl' => 1,
  ),
),false)) {
function content_59dec279ae0237_10543325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/combo1.jpg" alt="Combo1">
    </div>

    <div class="item">
      <img src="./images/combo2.jpg"alt="Combo2">
    </div>

    <div class="item">
      <img src="./images/combo3.jpg" alt="Combo3">
    </div>

    <div class="item">
      <img src="./images/combo4.jpg" alt="Combo4">
    </div>
  </div>

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

<div class="">

  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      <p>Incluye: 1 Bag Mediano de Pochoclos + 1 Gaseosa + 1 Vaso Litro Coleccionable + 1 recarga de pochoclos</p>

    </div>
    <div class="col-md-3">
      <p>Todos los jueves 2 x 1</p>

   </div>
    <div class="col-md-3">
      <p>15% de descuento con con Easy club y LosAndes club</p>

    </div>
    <div class="col-md-3">
      <p>2 boletos + 2 refrescos grandes  + pochoclos grandes</p>

    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <hr>
<?php }
}
