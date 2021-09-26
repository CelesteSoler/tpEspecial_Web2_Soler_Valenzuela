<?php
/* Smarty version 3.1.39, created on 2021-09-26 15:38:22
  from 'C:\xampp\htdocs\web2\tpEspecial\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615077ce9d7da3_30966531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b5d0354351ef4b811a37057d9689ebf62a6a79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpEspecial\\templates\\index.tpl',
      1 => 1632663371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615077ce9d7da3_30966531 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h1> Las Pulpas </h1>
    <h2> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li> <?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
 </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
