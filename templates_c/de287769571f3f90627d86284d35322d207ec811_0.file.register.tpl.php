<?php
/* Smarty version 3.1.30, created on 2017-10-12 14:50:47
  from "C:\xampp\htdocs\tp2finanda\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df6527168ba0_40239295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de287769571f3f90627d86284d35322d207ec811' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finanda\\templates\\register.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df6527168ba0_40239295 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <h3>Crear Cuenta</h3>
  <form class="formulario" action="register" method="post">
    <input type="email" name="email" value="" placeholder="E-mail">
    <input type="password" name="pass" value="" placeholder="Contraseña">
    <button type="submit" name="button">Crear</button>
  </form>
</div>
<?php }
}
