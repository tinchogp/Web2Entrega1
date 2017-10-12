<?php
/* Smarty version 3.1.30, created on 2017-10-05 19:27:48
  from "C:\xampp\htdocs\tp2fin\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d66b94871635_25849177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdcc972fa877c3a5e4a4a7074089749b04f35a26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2fin\\templates\\register.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d66b94871635_25849177 (Smarty_Internal_Template $_smarty_tpl) {
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
