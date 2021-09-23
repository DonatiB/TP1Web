<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:27:50
  from 'C:\xampp\htdocs\proyectos\web2\Practico_Especial1\JaponeseCars\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0d767ff799_44932969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780ddcb44dd243dc29f97554a432fc601eff2000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Practico_Especial1\\JaponeseCars\\templates\\home.tpl',
      1 => 1632439669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614d0d767ff799_44932969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['car']->value->Car;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['car']->value->Brand;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['car']->value->Year;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['car']->value->Description;?>
</li>
        <br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
