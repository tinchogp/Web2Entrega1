<?php
/* Smarty version 3.1.30, created on 2017-10-12 06:43:19
  from "C:\xampp\htdocs\tp2finanda\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59def2e7ddf548_36389608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ecbe120f226ec0f52e669216f22c19abc130b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finanda\\templates\\login.tpl',
      1 => 1507730814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59def2e7ddf548_36389608 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <h3>Log In</h3>
  <form class="formulario" action="mostrar_login" method="post">
    <div class="form-group">
      <input type="email" name="email" value="" placeholder="Email">
      <input type="password" name="pass" value="" placeholder="Contraseña">
      <button type="submit" name="button">Log In</button>
      <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
      <h2>Error</h2>
      <?php }?>
    </div>
  </form>
</div>
<?php }
}
