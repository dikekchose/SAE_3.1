<?php
/* Smarty version 4.2.1, created on 2022-12-14 15:16:30
  from 'C:\laragon\www\TP4\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6399e8cebeb4a7_62588601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bda975ce403ed9a760f9e5b0d9a2f81a5001efc' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\index.tpl',
      1 => 1671030989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399e8cebeb4a7_62588601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16567414286399e8cebd8806_19010183', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4036832946399e8cebdc096_53966252', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_16567414286399e8cebd8806_19010183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16567414286399e8cebd8806_19010183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4036832946399e8cebdc096_53966252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4036832946399e8cebdc096_53966252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1 style="margin-bottom: 2vw; margin-left: 5vw">Home</h1>
<p style="margin-bottom: 5vw; margin-left: 5vw"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['connection']->value == true) {?>
        <a class="menu" href="/TP4/profil">Voir mon profil</a>
        <a class="menu">|</a>
        <a class="menu" href="/TP4/logout">Se déconnecter</a>
    <?php } else { ?>
        <a class="menu" href="/TP4/login">Se connecter</a>
        <a class="menu">|</a>
        <a class="menu" href="/TP4/register">S'inscrire</a>
    <?php }?>
</div>
<?php
}
}
/* {/block 'body'} */
}
