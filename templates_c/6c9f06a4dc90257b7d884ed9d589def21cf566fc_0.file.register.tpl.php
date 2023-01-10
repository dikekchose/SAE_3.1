<?php
/* Smarty version 4.2.1, created on 2022-12-19 13:20:44
  from 'C:\laragon\www\TP4\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a0652c4aa692_07714994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c9f06a4dc90257b7d884ed9d589def21cf566fc' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\register.tpl',
      1 => 1671456040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0652c4aa692_07714994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96227068163a0652c4a19d3_14125686', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53671047463a0652c4a4326_09847141', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_96227068163a0652c4a19d3_14125686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_96227068163a0652c4a19d3_14125686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_53671047463a0652c4a4326_09847141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_53671047463a0652c4a4326_09847141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div id='main'>
<body>
   <h3 style="color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
    <form action="/TP4/register" method="post">
       <p>Nom</p>
       <input type="text" id="name" name="name" required
              minlength="0" maxlength="100" size="15"
              value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
       <p>Email</p>
       <input type="email" id="email" name="email" required
              minlength="0" maxlength="100" size="15"
              value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
       <p>Mot de passe</p>
       <input type="password" id="mdp" name="mdp" required
              minlength="8" maxlength="100" size="15"
              value="<?php echo $_smarty_tpl->tpl_vars['mdp']->value;?>
">
       <br>
       <br>
       <input type="submit" name="submit">
    </form>
</body>
</div>
<?php
}
}
/* {/block 'body'} */
}
