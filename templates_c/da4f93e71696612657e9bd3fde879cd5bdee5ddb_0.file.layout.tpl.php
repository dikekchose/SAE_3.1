<?php
/* Smarty version 4.2.1, created on 2022-12-14 14:34:03
  from 'C:\laragon\www\TP4\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6399dedb2389b7_07644343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da4f93e71696612657e9bd3fde879cd5bdee5ddb' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\layout.tpl',
      1 => 1671028440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399dedb2389b7_07644343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2392412756399dedb232450_39468925', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17406517286399dedb236201_97702044', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7718887346399dedb237269_73681991', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3700732206399dedb237e64_28582574', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_2392412756399dedb232450_39468925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2392412756399dedb232450_39468925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_17406517286399dedb236201_97702044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_17406517286399dedb236201_97702044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
        a {
            margin-left: 50px;
        }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_7718887346399dedb237269_73681991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_7718887346399dedb237269_73681991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href='./'>index</a>
<a href='register'>inscription</a> 
<a href='login'>connexion</a> 
<a href='profil'>profil</a> 
<a href='https://www.u-picardie.fr'>lien upicardie externe</a> 
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_3700732206399dedb237e64_28582574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3700732206399dedb237e64_28582574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
