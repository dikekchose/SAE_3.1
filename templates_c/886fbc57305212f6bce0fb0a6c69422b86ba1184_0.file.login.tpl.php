<?php
/* Smarty version 4.2.1, created on 2022-12-14 14:09:44
  from 'C:\laragon\www\TP4\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6399d9288fb9b6_70113139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886fbc57305212f6bce0fb0a6c69422b86ba1184' => 
    array (
      0 => 'C:\\laragon\\www\\TP4\\templates\\login.tpl',
      1 => 1671026969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399d9288fb9b6_70113139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13870444906399d9288f25b2_13462540', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18435263656399d9288f3db2_24222866', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_13870444906399d9288f25b2_13462540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13870444906399d9288f25b2_13462540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18435263656399d9288f3db2_24222866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18435263656399d9288f3db2_24222866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<body>
    <h1>Login</h1>
    <h2 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
    <form action="/TP4/login" method="post">
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
