<?php
/* Smarty version 4.2.1, created on 2022-12-18 15:39:16
  from 'C:\laragon\www\TP4\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639f3424ebdc06_06274171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ac62c78737de33a18d8c0c9d66c9440a74eba80' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\profil.tpl',
      1 => 1671377954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639f3424ebdc06_06274171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93796033639f3424ebadc0_11906019', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326313423639f3424ebcf51_08760714', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_93796033639f3424ebadc0_11906019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_93796033639f3424ebadc0_11906019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_326313423639f3424ebcf51_08760714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_326313423639f3424ebcf51_08760714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Mon profil</h1>
</div>
<?php
}
}
/* {/block 'body'} */
}
